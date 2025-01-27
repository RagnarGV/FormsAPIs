<?php

namespace App\Http\Controllers;

use App\Models\FormsModal;
use App\Models\FormSubmissions;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function saveForm(Request $request)
    {

        $form = new FormsModal();
        $form->form_name = $request->form_name;
        $form->form_data = $request->form_data;
        $form->save();

        return response()->json(['success' => $request->post()]);
    }

    public function submitForm(Request $request)
    {

        $form = new FormSubmissions();
        $form->form_name = $request->form_name;
        $form->user_id = $request->user_id;
        $form->form_data = $request->form_data;
        $form->save();

        return response()->json(['success' => $request->post()]);
    }

    public function getForm($id)
    {
        $form = FormsModal::find($id);
        return response()->json($form);
    }

    public function updateForm(Request $request, $id)
    {
        $form = FormsModal::find($id);
        $form->form_name = $request->form_name;
        $form->form_data = $request->form_data;
        $form->save();
        return response()->json(['success' => true]);
    }

    public function deleteForm($id)
    {
        $form = FormsModal::find($id);

        if ($form) {
            $form->delete();
            return response()->json(['success' => true, 'message' => 'Form deleted successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Form not found'], 404);
        }
    }

    public function listForms()
    {
        return response()->json(FormsModal::all());
    }
}
