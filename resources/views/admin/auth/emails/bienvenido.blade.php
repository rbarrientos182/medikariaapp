@extends('admin.auth.emails.default')

@section('content')
  ¡Hola {!!$name!!}!
  <br>
  Gracias por unirte a MEDIKARIA.<br>
  Ya puede disfrutar de la plataforma. <br>
  Realiza los pedidos de los medicamentos, para que el paciente los reciba desde la comodidad de su casa.
  Eligiendo las farmacias afiliadas, Farmacias del Ahorro, Farmacias Benavides, Farmacias Guadalajara.
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
