<?php

namespace App\Http\Controllers\API;

use App\Models\FrontBlock;
use App\Models\BlockItem;
use App\Models\Mail;
use Illuminate\Http\Request;

class FrontEditorController extends BaseController
{
    public function index()
    {
        $blocks = FrontBlock::orderBy('sort_id')->get();
        return $this->sendResponse($blocks->toArray());
    }

    public function show($id){
        /*$blocks = BlockItem::where('front_block_id', $id)->get();
        if (is_null($blocks)) {
            return $this->sendError('Product not found.');
        }*/

        $frontBlock = FrontBlock::with('items:front_block_id,params')->find($id);
        if (is_null($frontBlock)) {
            return $this->sendError('Product not found.');
        }


        $blockItems = [];
        foreach ($frontBlock->items as $blockItem) {
            $params = json_decode($blockItem->params);
            $blockItems[] =$params;
        }

        $frontBlockArr = $frontBlock->toArray();
        $frontBlockArr['items'] = $blockItems;

        return $this->sendResponse($frontBlockArr);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $name = $input['name'] || 'Без названия';
        $block = FrontBlock::create(['name'=>$name]);
        $block->items()->delete();
        foreach ($input['params'] as $params) {
            $block->items()->create(['params'=>json_encode($params)]);
        }
       // $input
        return $this->sendResponse($block->toArray());
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $frontBlock = FrontBlock::find($id);
        $frontBlock->name = $input['name'];
        $frontBlock->save();
        $frontBlock->items()->delete();
        foreach ($input['params'] as $params) {
            $frontBlock->items()->create(['params'=>json_encode($params)]);
        }
       //$frontBlock->items()->createMany($input['params']);


        return $this->sendResponse(gettype($input['params']));
        //dd($input);
        /*$validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }*/
        //$product->name = $input['name'];
        //$product->detail = $input['detail'];
       // $product->save();
       // return $this->sendResponse($product->toArray(), 'Product updated successfully.');
    }

    public function getBlocksForFront(Request  $request) {
        $blocks = FrontBlock::with('items:front_block_id,params')->where('disabled', 0)->orderBy('sort_id')->get()
                ->map(function ($block) {
                   return [
                       'id'=>$block->id,
                       'name'=>$block->name,
                       'items'=>$block->items->map(function ($item) {
                           return json_decode($item->params);
                       })
                   ];
                });
        /*dd($blocks);

        foreach ($blocks as $block) {
            $blockItems = [];
            foreach ($block['items'] as $blockItem) {
                $params = json_decode($blockItem['params']);
                $blockItems[] =$params;
            }
            $blocks['items'] = $blockItems;
        }*/

        return $this->sendResponse($blocks->toArray(), 'Product updated successfully.');
    }

    public function updateFrontBlocks(Request  $request){
        $input = $request->all();

        foreach ($input['blocks'] as $index => $block) {
            $frontBlock = FrontBlock::find($block['id']);
            $frontBlock->disabled = $block['disabled'];
            $frontBlock->sort_id = $index;
            $frontBlock->save();
        }


        return $this->sendResponse($input['blocks'][0], 'Product updated successfully.');
    }

}
