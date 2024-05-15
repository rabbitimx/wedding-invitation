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
        //     ['Paola Michelle Espejel Cravioto y Manuel Francisco Borges Castañeda', 2, 'ALFREDO'],
        //     ['Leticia Espejel Hernandez', 2, 'ALFREDO'],
        //     ['Familia Espejel Canella', 4, 'ALFREDO'],
        //     ['Familia Vera Espejel', 2, 'ALFREDO'],
        //     ['Familia Espejel Crabioto', 2, 'ALFREDO'],
        //     ['Familia Espejel Mejia', 4, 'ALFREDO'],
        //     ['Familia Espejel Nambo', 4, 'ALFREDO'],
        //     ['José Luis Espejel Hernandez', 3, 'ALFREDO'],
        //     ['Familia Espejel Hernandez', 2, 'ALFREDO'],
        //     ['Erick Vera Vazquez', 2, 'ALFREDO'],
        //     ['Vania Vera Vazquez', 2, 'ALFREDO'],
        //     ['Familia Siller Espejel', 2, 'ALFREDO'],
        //     ['Leticia Areli Celestin Espejel', 2, 'ALFREDO'],
        //     ['Familia Jimenez Celestin', 2, 'ALFREDO'],
        //     ['Familia Duarte Figueroa', 3, 'ALFREDO'],
        //     ['Familia Torres Becerra', 2, 'ALFREDO'],
        //     ['Familia Suarez Vargas', 2, 'ALFREDO'],
        //     ['Vanessa Hernandez', 2, 'ALFREDO'],
        //     ['Juan Manuel Rodriguez', 2, 'ALFREDO'],
        //     ['Familia Campos Barceló', 2, 'DULCE'],
        //     ['Hortencia Veronica Barceló Salas', 2, 'DULCE'],
        //     ['Alexandra Cruz Salgado', 2, 'DULCE'],
        //     ['Marcos Vicenteño Santos', 2, 'DULCE'],
        //     ['Veronica Pallares Barceló', 3, 'DULCE'],
        //     ['Familia Escobar Pallares', 2, 'DULCE'],
        //     ['Familia Manzanita Mendez', 3, 'DULCE'],
        //     ['Familia Vaca Mendez', 3, 'DULCE'],
        //     ['Familia Mendez Reyes', 3, 'DULCE'],
        //     ['Familia Hernandez Reyes', 4, 'DULCE'],
        //     ['Alexandra Sarahi Aguilar Maya', 2, 'DULCE'],
        //     ['Familia Vazquez Dominguez', 3, 'DULCE'],
        //     ['Alejandra Paulina Serrano Gonzalez', 2, 'DULCE'],
        //     ['Alejandro Calderon Salgado', 2, 'DULCE'],
        //     ['Daniel Haddad', 2, 'DULCE'],
        //     ['Elias Gutierrez Flores', 2, 'DULCE'],
        //     ['Marlene Gomez', 2, 'DULCE'],
        //     ['Karen Melany Solorzano Guarneros', 2, 'DULCE'],
        //     ['Samuel Yeshua Campos', 2, 'DULCE'],
        //     ['Orlando de Jesús Angeles', 2, 'DULCE'],
        // ];

        // foreach ($invitees as $data) {
        //     $key = substr(sha1($data[0]), 0, 6);
        //     Invitation::create([
        //         'key' => $key,
        //         'envelope_name' => $data[0],
        //         'passes' => $data[1],
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
        $confirmed_passes = $confirmed->sum('passes');

        $invitations = Invitation::orderBy('invited_by')->orderBy('envelope_name')->get();
        $invitations_count = $invitations->count();
        $invitations_passes = $invitations->sum('passes');
        
        return view('invitations', compact('invitations', 'confirmed_count', 'confirmed_passes', 'invitations_count', 'invitations_passes'));
    }
}
