<?php

namespace App\Http\Controllers\Admin;

use App\Models\Form;
use App\Models\Post;
use App\Models\FormField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    public function index(Request $request)
    {

        $forms = Form::all();

        if ($request->has('name')) {
            $forms->where('name', 'LIKE', '%' . $request->get('name') . '%');
        }

        return view('admin.forms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $formTypes = formTypes();

        return view('admin.forms.create', compact(['formTypes']));
    }

    public function store(Request $request)
    {
        $values = $request->all();
        $form = new Form();

        foreach (config('app.locales') as $locale) {
            $form->translateOrNew($locale)->title = $values[$locale]['title'];
        }

        $form->save();

        if (isset($values['n_fields'])) {
            foreach ($values['n_fields'] as $key => $value) {

                $field = new FormField();
                foreach (config('app.locales') as $locale) {
                    $field->translateOrNew($locale)->title = $value[$locale]['form_title'];
                }

                $field->type = $value['type_id'];
                $field->validation = $value['validation'];
                $field->data = $value['options'] ?? null;
                $field->form_id = $form->id;

                $field->save();

                // random changes
            }
        }

        return redirect()->route('forms.index', [app()->getLocale()])->with('success', 'save successfully');
    }

    public function edit($id)
    {
        $form = Form::where('id', $id)->with('translations')->first();
        $field = FormField::where('form_id', $id)->with('translations')->first();

        return view('admin.forms.update', compact(['form', 'field']));
    }

    public function update($id, Request $request)
    {
        $values = $request->all();

        $form = Form::findOrFail($id);
        foreach (config('app.locales') as $locale) {
            $form->translateOrNew($locale)->title = $values[$locale]['title'];
        }
        $form->save();

        FormField::where('form_id', $id)->delete();

        if (isset($values['n_fields'])) {
            foreach ($values['n_fields'] as $key => $value) {

                $field = new FormField();
                foreach (config('app.locales') as $locale) {
                    $field->translateOrNew($locale)->title = $value[$locale]['form_title'];
                }

                $field->type = $value['type_id'];
                $field->validation = $value['validation'];
                $field->data = $value['options'] ?? null;
                $field->form_id = $form->id;

                $field->save();

                // random changes
            }
        }

        return redirect()->back()->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $form = Form::where('id', $id)->first();
        $posts = Post::where('form_id', $id)->update(['form_id' => null]);

        FormField::where('form_id', $form->id)->delete();
        $form->delete();
        DB::commit();

        return Redirect::route('forms.index', [app()->getLocale()])->with('delete', 'Delete successfully');
    }

    public function destroyFormField($id)
    {
        FormField::where('id', $id)->delete();

        DB::commit();

        $notification = array('type' => 'success', 'message' => 'FormField deleted successfully');

        return redirect()->back()->with($notification);
    }

}
