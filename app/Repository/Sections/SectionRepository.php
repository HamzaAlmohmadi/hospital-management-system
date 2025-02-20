<?php
namespace App\Repository\Sections;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Section;

class SectionRepository implements SectionRepositoryInterface
{

    public function index()
    {
      $sections = Section::all();

      return view('Dashboard.Sections.index',compact('sections'));
    }


    public function store($request)
    {

        $request->validate(['name' => 'required|unique:section_translations,name'],
        [   'name.required' => 'يرجى ادخال اسم القسم ',
            'name.unique' => ' اسم القسم  موجود من قبل  ',
        ]);

        Section::create([ 'name' => $request->input('name'), ]);

        session()->flash('add');
        return redirect()->route('Sections.index');
    }

    public function update($request)
    {
        // $request->validate(['name' => 'required|unique:section_translations,name,'.$this->id ],
        // [   'name.required' => 'يرجى ادخال اسم القسم ',
        //     'name.unique' => ' اسم القسم  موجود من قبل  ',
        // ]);
        $section = Section::findOrFail($request->id);


        $section->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('Sections.index');
    }


    public function destroy($request)
    {
        Section::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Sections.index');
    }


    public function show($id)
    {
        $doctors =Section::findOrFail($id)->doctors;
        $section = Section::findOrFail($id);
        return view('Dashboard.Sections.show_doctors',compact('doctors','section'));
    }

}
