<?php

/* ***********************************************************************

Language localization: Brazilian Portuguese
Sparkle Web UI - a browser-based programming interface that beams
intructions from a phone/tablet/computer to etextiles

    Copyright (C) 2009-2014 Aniomagic Corporation.
                    All rights reserved.
This software is licensed under the BSD 2-Clause License:

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

   1. Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.

   2. Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY ANIOMAGIC CORPORATION ''AS IS'' AND ANY EXPRESS
OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN
NO EVENT SHALL ANIOMAGIC CORPORATION OR CONTRIBUTORS BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

The views and conclusions contained in the software and documentation are
those of the authors and should not be interpreted as representing official
policies, either expressed or implied, of Aniomagic Corporation.

*********************************************************************** */


/**** BEGIN GUI ****/


$locale_title_text = "Código"; //"Code";
$locale_title_air = "Airtext"; //FIXME
$locale_title_color = "Color"; //FIXME
$locale_title_sequencer = "Sequenciador";//Sequencer";
$locale_title_sensor = "Sensor";//"Sensor"; 
    
$locale_button_airtext = "MESSAGE TO DISPLAY";//FIXME
    
$locale_action_countdown = "contagem regressiva";//"countdown";
$locale_action_fade = "apagar gradualmente";//"fade";
$locale_action_pulse = "pulsar";//"pulse"; 
$locale_action_sleep = "entada-saída";//"in-out";
$locale_action_twinkle = "piscar";//"twinkle";
$locale_action_nothing = "desligar";//"turn off";


$locale_button_normal_text = "NORMAL";
$locale_button_special_text = "SPECIAL";//FIXME
//$locale_button_special_text = "PRESSIONADO";//"touched";
$locale_button_color_normal_text = "NORMAL";//FIXME
$locale_button_color_special_text = "SPECIAL";//FIXME
$locale_button_color_normal_text = "&nbsp;&nbsp;&nbsp;PRIMERIO";
$locale_button_color_special_text = "SEGUNDO";

$locale_gui_sleep = "desligue depois de";//"turn off after";
$locale_gui_repeat = "faça isto";//"do this";
$locale_sleep_iphone = "&nbsp;&nbsp;desligue";//"&nbsp;&nbsp;turn off";
$locale_repeat_iphone =  "&nbsp;&nbsp;faça isto";//"&nbsp;&nbsp;do this";

$locale_normal_second = "seg";//"sec";
$locale_normal_minute = "min";
$locale_normal_hour = "hora";//"hour";
$locale_normal_never = "nunca";//"never";
$locale_special_second = "uma vez";//"once";

$locale_repeat_many = "vezes";//"times";
$locale_repeat_once = "uma vez";//"once";

$locale_buttons_text_yoffset = 0;

$locale_ticks_text_xoffset = 0;
$locale_ticks_text_yoffset = 0;

$locale_sensor_affect_speed = "sensor afeta velocidade";//"sensor affects speed";
$locale_sensor_affect_speed_yes = "&nbsp;sim";//"&nbsp;yes";
$locale_sensor_affect_speed_no = "&nbsp;&nbsp;não";//"&nbsp;&nbsp;no";

$locale_sensor_text = "&nbsp;&nbsp;&nbsp;SENSOR";
$locale_range_text = "variação";//"range";

$locale_midpoint_text = "ponto central";//"midpoint";

$locale_speed_text = "velocidade";//"speed";
$locale_fast_text = "rápido";//"fast";
$locale_slow_text = "devagar";//"slow";

$locale_button_send_text = "Enviar";//"Send";
$locale_button_stop_text = "Parar";//"Stop";
$locale_button_help_text = "Help";
$locale_button_recall_text = "Limpar"; //"Recomeçar";//"Recall";
$locale_button_save_text = "Salvar";//"Save";

$locale_color_with_sensor = "até que sensor mude";//"change color only when sensor changes"
$locale_color_first_only  = "apagar gradualmente on o desligar";//"fade only the first color on and off"

$locale_transition_text = "TRANSIÇÃO";//"transition";
$locale_transition_do_this = "faça isto";//"do this";
$locale_transition_once = "uma vez";//"once";
$locale_transition_until_sensor = "até que sensor mude";//"until sensor<br>changes";

$locale_change_text = "Inglês";//"English";
$locale_change_location = "http://www.aniomagic.com/program/?hl=en";
$locale_transition_acummulate = "luzes";//"lights";
$locale_transition_repeat = "repita";//"repeat";
$locale_classic_ui = "Modo clássico";//"Classic UI";
$locale_classic_location = "http://www.aniomagic.com/program_classic/?hl=en";

$locale_transition_repeat_once = "ONCE";//FIXME
$locale_transition_repeat_always = "ALWAYS";//FIXME
$locale_transition_lights_single = "SINGLE";//FIXME
$locale_transition_lights_multiple = "MULTIPLE";//FIXME
$locale_transition_lights_inverse = "INVERSE";//FIXME

$locale_airtext_min_speed = "seg";//"sec";
$locale_airtext_max_speed  = "pressionado";//"pressed";
$locale_airtext_alternate_text = "alterne toda vez";//alternate every";

$locale_hide_errors = "Esconda mensagens de erro e tente outra vez";//"Hide error messages and try again.";

$pulldown_menu_file = "ui/pulldown-menu.png";


/**** END GUI ****/



/**** BEGIN CODE PRIMITIVES ****/

$locale_define = 'define';//'define';
$locale_begin =  'begin';//'begin';
$locale_if = 'se';//'if';
$locale_settings = 'configurações';//'settings';
$locale_sleep = 'dormir';//'sleep';
$locale_unlit = 'apagar';//'unlit';
$locale_push = 'por na fila'; //'push';
$locale_pop = 'retirar da fila'; //'pop';
$locale_jump = 'pular';//'jump';
$locale_call = 'chamar';//'call';
$locale_return = 'retonar';//'return';

$locale_touch = 'tocar';//'amalucado';
$locale_center = 'centralizar';//'center';
$locale_sense = 'sentir';//'sense';
$locale_build = 'construir';//'build';
$locale_multiple = 'multiple';//'build';
$locale_countdown = 'contagem regressiva';//'countdown';
$locale_color = 'cor';//'color';
$locale_light = 'acender';//'light';
$locale_fade = 'single';//'fade';
$locale_single = 'single';//'fade';
$locale_UNUSED = 'NÃO USADO';//UNUSED';

$locale_end = 'fim';//'end';
$locale_left = 'esquerda';//'left';
$locale_right = 'direita';//'right';
$locale_in = 'entrada';//'in';
$locale_out = 'saída';//'out';
$locale_repeat = 'repetir';//'repeat';
$locale_wait = 'esperar';//'wait';
$locale_twinkle = 'piscar';//'twinkle';

$locale_sensor = 'sensor';
$locale_n = 'n';
$locale_nplus1 = '+1n';
$locale_nminus1 = '-1n';
$locale_s = 's';
$locale_splus1 = '+1s';
$locale_sminus1 = '-1s';
$locale_random = 'aleatório';//'random';
$locale_on  = 'on';
$locale_off = 'desligar';//'off';
$locale_all  = 'all';
$locale_motor = 'motor';

$locale_eq = '=';
$locale_lt = '<';
$locale_gt = '>';
$locale_even = 'par';//'even';
$locale_odd = 'ímpar';//'odd';


$locale_begin = 'início';//'begin';
$locale_always = 'sempre';//'always';
$locale_define = 'define';
$locale_debug = 'debug';



$locale_example_code =
                '; suavemente, pisca as luzes se paradas\n'
    .   '; cada ciclo leva 10 segundos\n\n'
    .   '(' . $locale_always . '\n'
    .   '   (' . $locale_twinkle . ' 10))\n'
    .   '\n\n';
       // '; softly, twinkle the lights nonstop\n'
   // .   '; each cycle takes 10 seconds\n\n'
   // .   '(' . $locale_always . '\n'
   // .   '   (' . $locale_twinkle . ' 10))\n'
   // .   '\n\n';


/*
error_msg("numbers can only be from 1-10");
error_msg("the only names accepted are n or sensor " + "(you typed " + this.name + ")");
error_msg("give a name for this definition");
error_msg("add brackets around XXX to make it a procedure. for example:");
error_msg("add some actions for this, for example:");
error_msg("a procedure with the name " + expr.name + " has already been defined.\nChoose a new name");
error_msg("procedure definitions can either" + " take none or only 1 thing");
error_msg("you cannot use a number in the" + " definition for " + expr.name);
error_msg(this.name + " takes 2 things but got " + this.args.length);
error_msg("\nYou need a comparison here like (" + this.name +
                    " n 5) or  (" + this.name + " sensor 5)");
error_msg("the first thing for " + this.name + " must be sensor or n");
error_msg("you need a comparison here like < switch? even? \nYou typed: " + expr.name);
error_msg("add brackets around " + expr.name + " to make it a procedure. Like: (" + expr.name + ")");
error_msg("you need to have something to do here");
error_msg("if can only have 2 branches. You have " + (this.args.length-1) +
                 ".\nYou probably meant to group several actions with ()");
error_msg("all things must be procedures");
error_msg("you need to have something to repeat here");
error_msg("you need a number, sensor, n, (+1 n) or (-1 n) here. You typed: " + expr.name);
error_msg("all things to repeat must be procedures");
error_msg("I don't recognize " + this.name);
error_msg("I don't recognize what " + this.name + " is for here");
*/



/**** END CODE PRIMITIVES ****/

?>



