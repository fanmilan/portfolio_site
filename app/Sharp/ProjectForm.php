<?php

namespace App\Sharp;

use App\Models\Project;
use App\Models\Tag;
use Code16\Sharp\Form\Eloquent\Uploads\Transformers\SharpUploadModelFormAttributeTransformer;
use Code16\Sharp\Form\Eloquent\WithSharpFormEloquentUpdater;
use Code16\Sharp\Form\Fields\SharpFormCheckField;
use Code16\Sharp\Form\Fields\SharpFormDateField;
use Code16\Sharp\Form\Fields\SharpFormListField;
use Code16\Sharp\Form\Fields\SharpFormSelectField;
use Code16\Sharp\Form\Fields\SharpFormTagsField;
use Code16\Sharp\Form\Fields\SharpFormTextareaField;
use Code16\Sharp\Form\Fields\SharpFormTextField;
use Code16\Sharp\Form\Fields\SharpFormUploadField;
use Code16\Sharp\Form\Layout\FormLayoutColumn;
use Code16\Sharp\Form\SharpForm;

class ProjectForm extends SharpForm
{
    use WithSharpFormEloquentUpdater;

    /**
     * Retrieve a Model for the form and pack all its data as JSON.
     *
     * @param $id
     * @return array
     */
    public function find($id): array
    {
        return $this
            ->setCustomTransformer(
                "cover",
                new SharpUploadModelFormAttributeTransformer()
            )
            ->transform(
                Project::with('tags', 'links', 'cover')->findOrFail($id)
            );
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed the instance id
     */
    public function update($id, array $data)
    {
        $project = $id ? Project::findOrFail($id) : new Project;
        $this->save($project, $data);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        Project::findOrFail($id)->find($id)->delete();
    }

    /**
     * Build form fields using ->addField()
     *
     * @return void
     */
    public function buildFormFields()
    {

        $this->addField(
            SharpFormTextField::make('name')
                ->setLabel('Название')
        )
            ->addField(
                SharpFormTextField::make('code')
                    ->setLabel('Код страницы')
            )
            ->addField(
                SharpFormCheckField::make('published', 'Опубликовано')
                    ->setText('Опубликовано')
            )
            ->addField(
                SharpFormTextareaField::make('description')
                    ->setLabel('Описание')
                    ->setRowCount(4)
            )->addField(
                SharpFormTagsField::make('tags', Tag::pluck("name", "id")->all())
                    ->setLabel('Теги')
                    ->setCreatable(true)
                    ->setCreateText('Создать новый тег')
                    ->setCreateAttribute('name')
            )
            ->addField(
                SharpFormUploadField::make("cover")
                    ->setLabel("Обложка")
                    ->setFileFilterImages()
                    ->setStorageDisk("local")
                    ->setStorageBasePath("data/project/cover")
            )
            ->addField(
                SharpFormListField::make('links')
                    ->setLabel('Ссылки')
                    ->setAddable()
                    ->setRemovable()
                    ->addItemField(
                        SharpFormTextField::make("link")
                            ->setLabel("Ссылка")
                    )
                    ->addItemField(
                        SharpFormTextField::make("type")
                            ->setLabel("Тип ссылки")
                    )

            );
    }

    /**
     * Build form layout using ->addTab() or ->addColumn()
     *
     * @return void
     */
    public function buildFormLayout()
    {
        $this->addColumn(6, function (FormLayoutColumn $column) {
            $column
                ->withSingleField('name')
                ->withSingleField('code')
                ->withSingleField('published')
                ->withSingleField('cover')
                ->withSingleField('description')
                ->withSingleField('tags')
                ->withSingleField('links', function (FormLayoutColumn $listItem) {
                    $listItem->withSingleField("link");
                    $listItem->withSingleField("type");
                });
        });
    }
}
