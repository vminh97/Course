<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use App\Model\Category;
class TestExport implements FromCollection,WithHeadings,ShouldAutoSize,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $posts = Category::all();
        foreach($posts as $post){
            $post_ex[]= array(
                '0'=>$post->id,
                '1'=>$post->Name,
                '2'=>$post->name_Display,
            );
        }
        return (collect($post_ex));
    }
    public function headings(): array
    {
        return [
            'id',
            'Name',
            'name_Display'
        ];
    }
    public function map($bill): array
    {
        return [
            $category->id,
            $category->Name,
            $category->name_Display,
        ];
    }
}
