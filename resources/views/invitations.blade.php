@extends('layouts.master')

@section('styles')
    <style>
        /* The snackbar - position it at the bottom and in the middle of the screen */
        #snackbar {
            visibility: hidden;
            /* Hidden by default. Visible on click */
            min-width: 250px;
            /* Set a default minimum width */
            margin-left: -125px;
            /* Divide value of min-width by 2 */
            background-color: #333;
            /* Black background color */
            color: #fff;
            /* White text color */
            text-align: center;
            /* Centered text */
            border-radius: 2px;
            /* Rounded borders */
            padding: 16px;
            /* Padding */
            position: fixed;
            /* Sit on top of the screen */
            z-index: 1;
            /* Add a z-index if needed */
            left: 50%;
            /* Center the snackbar */
            bottom: 30px;
            /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
            visibility: visible;
            /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
                          However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-3">Relación de invitados</h1>
        <div class="row mb-4">
            <div class="col-12 col-md-4">
                <div class="mb-3" style="border: 1px solid #888; border-radius: 3px">
                    <div class="px-3 py-2">
                        <p class="m-0">Invitaciones: {{ $invitations_count }}</p>
                        <p class="m-0">Boletos: {{ $invitations_passes }}</p>
                    </div>
                    <div style="position: relative; border-radius: 0 0 2px 2px; background: #bebebe; height: 5px;">
                        <div
                            style="position: absolute; border-radius: 0 0 2px 2px; background: #835845; height: 5px; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3" style="border: 1px solid #888; border-radius: 3px">
                    <div class="px-3 py-2">
                        <p class="m-0">Invitaciones confirmadas: {{ $confirmed_count }}</p>
                        <p class="m-0">Boletos asignados: {{ $confirmed_passes }}</p>
                    </div>
                    <div style="position: relative; border-radius: 0 0 2px 2px; background: #bebebe; height: 5px;">
                        <div
                            style="position: absolute; border-radius: 0 0 2px 2px; background: #835845; height: 5px; width: {{ ($confirmed_passes / $invitations_passes) * 100 }}%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3" style="border: 1px solid #888; border-radius: 3px">
                    <div class="px-3 py-2">
                        <p class="m-0">Invitaciones por confirmar: {{ $invitations_count - $confirmed_count }}</p>
                        <p class="m-0">Boletos por asignar: {{ $invitations_passes - $confirmed_passes }}</p>
                    </div>
                    <div style="position: relative; border-radius: 0 0 2px 2px; background: #bebebe; height: 5px;">
                        <div
                            style="position: absolute; border-radius: 0 0 2px 2px; background: #835845; height: 5px; width: {{ (1 - $confirmed_passes / $invitations_passes) * 100 }}%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mb-5">
                <thead>
                    <tr>
                        <th>Quien invita</th>
                        <th>Invitado</th>
                        <th>Boletos</th>
                        <th>Confirmado</th>
                        <th>Fecha de confirmación</th>
                        <th>Compartir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invitations as $invitation)
                        <tr>
                            <td>{{ $invitation->invited_by }}</td>
                            <td>{{ $invitation->envelope_name }}</td>
                            <td>{{ $invitation->passes }}</td>
                            <td>{{ $invitation->is_confirmed ? 'SÍ' : 'NO' }}</td>
                            <td>
                                <span style="font-family: monospace !important; font-size: 80%">{{ $invitation->confirmed_at }}</span>
                            </td>
                            <td>
                                <a href="{{ route('invitation', $invitation->key) }}">
                                    <span id="{{ $invitation->key }}"
                                        style="font-family: monospace !important; font-size: 60%">{{ route('invitation', $invitation->key) }}
                                    </span>
                                </a>
                                &nbsp;
                                <span onclick="copyToClipboard('{{ $invitation->key }}')" style="cursor: pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14" fill="#444">
                                        <path
                                            d="M208 0H332.1c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9V336c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V48c0-26.5 21.5-48 48-48zM48 128h80v64H64V448H256V416h64v48c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48z" />
                                    </svg>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- The actual snackbar -->
    <div id="snackbar">¡Invitación copiada a portapapeles!</div>
@endsection

@section('scripts')
    <script>
        function copyToClipboard(id) {
            var textToCopy = document.getElementById(id).innerText;

            var tempTextArea = document.createElement("textarea");
            tempTextArea.value = textToCopy;
            document.body.appendChild(tempTextArea);

            tempTextArea.select();

            document.execCommand("copy");

            document.body.removeChild(tempTextArea);

            showSnackbar();
        }

        function showSnackbar() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }
    </script>
@endsection
