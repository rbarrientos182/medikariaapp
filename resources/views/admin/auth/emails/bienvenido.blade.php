@extends('admin.auth.emails.default')
@section('emailheader')
<img src="{{asset('http://i.imgur.com/sV74cEI.jpg')}}" width="200" height="50" alt="alt_text" border="0" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
@stop

@section('content')
  ¡Hola {!!$name!!}!
  <br><br>
  Gracias por unirte a MEDIKARIA.<br>
  Ya puede comenzar a disfrutar de la plataforma. <br>
  Úsala, aprovéchala, y realiza a partir de este momento los pedidos de los
  medicamentos que prescribas a tus pacientes, y que ellos recibirán en la
  comodidad de su casa.
  <br><br>
  ¡Bienvenid@ a la comunidad MEDIKARIA!
  <br><br>
  <!-- Button : Begin -->
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto;">
      <tr>
          <td style="border-radius: 3px; background: #cc0b47; text-align: center;" class="button-td">
              <a href="{{route('auth_show_path')}}" style="background: #cc0b47; border: 15px solid #cc0b47; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                  <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;Haz clic para comenzar&nbsp;&nbsp;&nbsp;&nbsp;</span>
              </a>
          </td>
      </tr>
  </table>
  <!-- Button : END -->
@stop
@section('emailfooter')
  <webversion style="color:#cccccc; text-decoration:underline; font-weight: bold;">Ver Pagina</webversion>
  <br><br>
  MEDIKARIA<br>Puebla, Pue<br> (222) 1 864579
  <br><br>
  <unsubscribe style="color:#888888; text-decoration:underline;">Terminos</unsubscribe>
@stop
