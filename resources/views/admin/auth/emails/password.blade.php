@extends('admin.auth.emails.default')
@section('content')
Éste correo te ha llegado ya que indicaste la necesida de recuperar tu contraseña de acceso.<br><br>
Para recuperarla, haz click en el siguiente botón:
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto;">
      <tr>
          <td style="border-radius: 3px; background: #cc0b47; text-align: center;" class="button-td">
              <a href="{{url('password/reset/'.$token)}}" style="background: #cc0b47; border: 15px solid #cc0b47; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                  <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;Haz clic acá &nbsp;&nbsp;&nbsp;&nbsp;</span>
              </a>
          </td>
      </tr>
  </table>

@stop
@section('emailfooter')
En dado caso de que no hayas sido quien hizo la petición de recuperación de
contraseña cambiala a la brevedad haciendo click <a href="#">aquí</a>.
<webversion style="color:#cccccc; text-decoration:underline; font-weight: bold;">Ver Pagina</webversion>
<br><br>
MEDIKARIA<br>Puebla, Pue<br> (222) 1 864579
<br><br>
<unsubscribe style="color:#888888; text-decoration:underline;">Terminos</unsubscribe>
@stop
