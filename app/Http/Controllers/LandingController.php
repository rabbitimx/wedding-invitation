<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        // $invitees = [
        //     ['Familia Cruz Espejel', 2, 'ALFREDO'],
        //     ['Paola Espejel y Manuel Borges', 2, 'ALFREDO'],
        //     ['Leticia Espejel Hernández', 2, 'ALFREDO'],
        //     ['Familia Espejel Canella', 4, 'ALFREDO'],
        //     ['Familia Vera Espejel', 2, 'ALFREDO'],
        //     ['Familia Espejel Cravioto', 2, 'ALFREDO'],
        //     ['Familia Espejel Mejía', 4, 'ALFREDO'],
        //     ['Familia Espejel Nambo', 4, 'ALFREDO'],
        //     ['José Luis Espejel Hernández', 3, 'ALFREDO'],
        //     ['Familia Espejel Hernández', 2, 'ALFREDO'],
        //     ['Erick Vera Vázquez', 2, 'ALFREDO'],
        //     ['Vania Vera Vázquez', 2, 'ALFREDO'],
        //     ['Familia Siller Espejel', 2, 'ALFREDO'],
        //     ['Arely Leticia Celestín Espejel', 2, 'ALFREDO'],
        //     ['Familia Jiménez Celestín', 2, 'ALFREDO'],
        //     ['Familia Duarte Figueroa', 3, 'ALFREDO'],
        //     ['Familia Torres Becerra', 2, 'ALFREDO'],
        //     ['Familia Suarez Vargas', 2, 'ALFREDO'],
        //     ['Vanessa Hernández', 2, 'ALFREDO'],
        //     ['Juan Manuel Rodriguez', 2, 'ALFREDO'],
        //     ['Familia Campos Barceló', 2, 'DULCE'],
        //     ['Hortencia Veronica Barceló Salas', 2, 'DULCE'],
        //     ['Alexandra Cruz Salgado', 2, 'DULCE'],
        //     ['Marcos Vicenteño Santos', 2, 'DULCE'],
        //     ['Veronica Pallares Barceló', 3, 'DULCE'],
        //     ['Familia Escobar Pallares', 2, 'DULCE'],
        //     ['Familia Manzanita Méndez', 3, 'DULCE'],
        //     ['Familia Vaca Méndez', 3, 'DULCE'],
        //     ['Familia Méndez Reyes', 3, 'DULCE'],
        //     ['Familia Hernández Reyes', 4, 'DULCE'],
        //     ['Alexandra Sarahí Aguilar Maya', 2, 'DULCE'],
        //     ['Familia Vázquez Dominguez', 3, 'DULCE'],
        //     ['Alejandra Paulina Serrano González', 2, 'DULCE'],
        //     ['Alejandro Calderón Salgado', 2, 'DULCE'],
        //     ['Daniel Haddad', 2, 'DULCE'],
        //     ['Elias Gutiérrez Flores', 2, 'DULCE'],
        //     ['Marlene Gómez', 2, 'DULCE'],
        //     ['Karen Melany Solórzano Guarneros', 2, 'DULCE'],
        //     ['Samuel Yeshua Campos', 2, 'DULCE'],
        //     ['Orlando de Jesús Ángeles', 2, 'DULCE'],
        // ];

        // foreach ($invitees as $data) {
        //     $key = substr(sha1($data[0]), 0, 6);
        //     Invitation::create([
        //         'key' => $key,
        //         'envelope_name' => $data[0],
        //         'passes_total' => $data[1],
        //         'invited_by' => $data[2],
        //     ]);
        // }

        $just_confirmed = session('just_confirmed') ?? null;
        $invitation = Invitation::where('key', $request->key)->first();
        return view('landing', compact('invitation', 'just_confirmed'));
    }

    public function confirmInvitee(Request $request)
    {
        $invitation = Invitation::where('key', $request->key)->first();
        $invitation->is_confirmed = 1;
        $invitation->passes_confirmed = $request->passes_confirmed;
        $invitation->confirmed_at = Carbon::now();
        $invitation->save();

        return redirect()->back()->with([
            'just_confirmed' => true,
        ]);
    }

    public function invitations(Request $request)
    {
        $confirmed = Invitation::where('is_confirmed', 1)->get();
        $confirmed_count = $confirmed->count();
        $confirmed_passes = $confirmed->sum('passes_confirmed');

        $invitations = Invitation::orderBy('invited_by')->orderBy('envelope_name')->get();
        $invitations_count = $invitations->count();
        $invitations_passes = $invitations->sum('passes_total');
        
        return view('invitations', compact('invitations', 'confirmed_count', 'confirmed_passes', 'invitations_count', 'invitations_passes'));
    }
}
