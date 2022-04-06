<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CDN LINK
    |--------------------------------------------------------------------------
    | By default SweetAlert2 use its local sweetalert.all.js
    | file.
    | However, you can use its cdn if you want.
    |
    */

    'cdn' => env('SWEET_ALERT_CDN'),

/*
     |----------------------------------------------------------------- -------------------------
     | Cargue siempre el archivo sweetalert.all.js
     |----------------------------------------------------------------- -------------------------
     | Puede haber situaciones en las que siempre querrás la dulce alerta.
     | js paquete para estar allí para usted. (por ejemplo, puede usarlo mucho para
     | mostrar notificaciones o es posible que desee usar el js nativo), entonces esto
     | podría ser útil.
     |
     */

    'alwaysLoadJS' => env('SWEET_ALERT_ALWAYS_LOAD_JS', false),

/*
     |----------------------------------------------------------------- -------------------------
     | Nunca cargue el archivo sweetalert.all.js
     |----------------------------------------------------------------- -------------------------
     | Si desea manejar el paquete Sweet Alert js usted mismo
     | (por ejemplo, es posible que desee usar laravel mix), entonces esto puede ser
     | práctico.
     | Si establece siempre cargar js en verdadero y nunca cargar js en falso,
     | va a priorizar nunca cargar js.
     |
     | alwaysLoadJs = true & neverLoadJs = true => js no se cargará
     | alwaysLoadJs = true & neverLoadJs = false => se cargará js
     | alwaysLoadJs = false & neverLoadJs = false => js se cargará cuando
     | usted establece alerta/brindis mediante el uso de las funciones de fachada/ayuda.
     */

    'neverLoadJS' => env('SWEET_ALERT_NEVER_LOAD_JS', false),

    /*
     |----------------------------------------------------------------- -------------------------
     | Temporizador de cierre automático
     |----------------------------------------------------------------- -------------------------
     |
     | Esto es para todas las ventanas Modales.
     | Para un modal específico, simplemente use el método auxiliar autoClose().
     |
     */

    'timer' => env('SWEET_ALERT_TIMER', 5000),

    /*
    |--------------------------------------------------------------------------
    | Width
    |--------------------------------------------------------------------------
    |
    | Modal window width, including paddings (box-sizing: border-box).
    | Can be in px or %.
    | The default width is 32rem.
    | This is for the all Modal windows.
    | for particular modal just use the width() helper method.
    */

    'width' => env('SWEET_ALERT_WIDTH', '32rem'),

    /*
    |--------------------------------------------------------------------------
    | Height Auto
    |--------------------------------------------------------------------------
    | By default, SweetAlert2 sets html's and body's CSS height to auto !important.
    | If this behavior isn't compatible with your project's layout,
    | set heightAuto to false.
    |
    */

    'height_auto' => env('SWEET_ALERT_HEIGHT_AUTO', true),

    /*
    |--------------------------------------------------------------------------
    | Padding
    |--------------------------------------------------------------------------
    |
    | Modal window padding.
    | Can be in px or %.
    | The default padding is 1.25rem.
    | This is for the all Modal windows.
    | for particular modal just use the padding() helper method.
    */

    'padding' => env('SWEET_ALERT_PADDING', '1.25rem'),

    /*
     |----------------------------------------------------------------- -------------------------
     | Animación
     |----------------------------------------------------------------- -------------------------
     | Animación personalizada con [Animate.css](https://daneden.github.io/animate.css/)
     | Si se establece en falso, la animación CSS modal utilizará las predeterminadas.
     | Para un modal específico, simplemente use el método auxiliar animation().
     |
     */

    'animation' => [
        'enable' => env('SWEET_ALERT_ANIMATION_ENABLE', false),
    ],

    'animatecss' => env('SWEET_ALERT_ANIMATECSS', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'),

    /*
     |----------------------------------------------------------------- -------------------------
     | MostrarBotónConfirmar
     |----------------------------------------------------------------- -------------------------
     | Si se establece en falso, no se mostrará el botón "Confirmar".
     | Puede ser útil cuando utiliza una descripción HTML personalizada.
     | Esto es para todas las ventanas Modales.
     | Para un modal específico, simplemente use el método auxiliar showConfirmButton().
     |
     */

    'show_confirm_button' => env('SWEET_ALERT_CONFIRM_BUTTON', true),

    /*
     |----------------------------------------------------------------- -------------------------
     | MostrarBotónCerrar
     |----------------------------------------------------------------- -------------------------
     | Si se establece en verdadero, se mostrará un botón "Cerrar",
     | en el que el usuario puede hacer clic para descartar el modal.
     | Esto es para todas las ventanas Modales.
     | Para un modal específico, simplemente use el método auxiliar showCloseButton().
     |
     */

    'show_close_button' => env('SWEET_ALERT_CLOSE_BUTTON', true),

    /*
     |----------------------------------------------------------------- -------------------------
     | Posición de brindis
     |----------------------------------------------------------------- -------------------------
     | Ventana modal o posición tostada, puede ser 'superior',
     | 'inicio superior', 'extremo superior', 'centro', 'inicio central',
     | 'extremo central', 'extremo inferior', 'extremo inferior' o 'extremo inferior'.
     | Para un modal específico, simplemente use el método auxiliar position().
     |
     */

    'toast_position' => env('SWEET_ALERT_TOAST_POSITION', 'top-end'),

    /*
     |----------------------------------------------------------------- -------------------------
     | Barra de progreso
     |----------------------------------------------------------------- -------------------------
     | Si se establece en verdadero, se mostrará una barra de progreso en la parte inferior de una ventana emergente.
     | Puede ser útil con tostadas.
     |
     */

    'timer_progress_bar' => env('SWEET_ALERT_TIMER_PROGRESS_BAR', true),

    /*
     |----------------------------------------------------------------- -------------------------
     | software intermedio
     |----------------------------------------------------------------- -------------------------
     | Ventana modal o brindis, configuración para el Middleware
     |
     */

    'middleware' => [

        'autoClose' => env('SWEET_ALERT_MIDDLEWARE_AUTO_CLOSE', false),

        'toast_position' => env('SWEET_ALERT_MIDDLEWARE_TOAST_POSITION', 'top-end'),

        'toast_close_button' => env('SWEET_ALERT_MIDDLEWARE_TOAST_CLOSE_BUTTON', true),

        'timer' => env('SWEET_ALERT_MIDDLEWARE_ALERT_CLOSE_TIME', 9000),

        'auto_display_error_messages' => env('SWEET_ALERT_AUTO_DISPLAY_ERROR_MESSAGES', false),
    ],

    /*
     |----------------------------------------------------------------- -------------------------
     | Clase personalizada
     |----------------------------------------------------------------- -------------------------
     | Una clase CSS personalizada para el modal:
     |
     */

    'customClass' => [

        'container' => env('SWEET_ALERT_CONTAINER_CLASS'),
        'popup' => env('SWEET_ALERT_POPUP_CLASS'),
        'header' => env('SWEET_ALERT_HEADER_CLASS'),
        'title' => env('SWEET_ALERT_TITLE_CLASS'),
        'closeButton' => env('SWEET_ALERT_CLOSE_BUTTON_CLASS'),
        'icon' => env('SWEET_ALERT_ICON_CLASS'),
        'image' => env('SWEET_ALERT_IMAGE_CLASS'),
        'content' => env('SWEET_ALERT_CONTENT_CLASS'),
        'input' => env('SWEET_ALERT_INPUT_CLASS'),
        'actions' => env('SWEET_ALERT_ACTIONS_CLASS'),
        'confirmButton' => env('SWEET_ALERT_CONFIRM_BUTTON_CLASS'),
        'cancelButton' => env('SWEET_ALERT_CANCEL_BUTTON_CLASS'),
        'footer' => env('SWEET_ALERT_FOOTER_CLASS'),
    ],

];
