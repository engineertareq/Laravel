<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return view('demo');
    }

    public function notification(Request $request, $type)
    {
        $entity = $request->input('entity', 'User');

        $entity = ucfirst($entity);

        switch ($type) {
            case 'success':
                return back()->with("success", "{$entity} created successfully.");
                break;

            case 'info':
                return back()->with("info", "{$entity} updated successfully.");
                break;

            case 'warning':
                return back()->with("warning", "{$entity} can not access page.");
                break;

            case 'error':
                return back()->with("error", "There was an error with this {$entity}.");
                break;
            
            default:
                return back();
                break;
        }
    }
}