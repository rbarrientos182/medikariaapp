@extends('admin.auth.emails.default')

@section('content')
  Recupera tu contraseña<br>
  Para recuperar tu contraseña haz click en la siguiente botón.<br><br>
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
