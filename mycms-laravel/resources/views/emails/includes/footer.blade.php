<table width="100%" cellspacing="0" cellpadding="0" border="0" class="footer" style="border-collapse: collapse;">
    <tbody>
        <tr>
            <td align="center" class="footer" style="border-collapse: collapse; padding: 30px;">
                <p>
                    <a target="_blank" href="#"> Customer Happiness Center </a> |
                    <a target="_blank" href="#"> Trending Campaigns</a> |
                    <a target="_blank" href="#"> Recent news</a> |
                    <a target="_blank" href="#" >Email Preference Center</a>
                </p>
                <table width="200" cellspacing="0" cellpadding="0" border="0"
                   style="border-collapse: collapse; margin: 30px 0;">
                <tbody>
                    <tr>
                        <td align="right" width="30" style="border-collapse: collapse;">
                            <a href="#">
                                <img alt="Facebook" src="{{ asset('frontEnd/images/facebook.png') }}" width="25" style="display: block; border: none;">
                            </a>
                        </td>
                        <td align="right" width="30" style="border-collapse: collapse;">
                            <a href="#" style="color: #000001; text-decoration: none;">
                                <img alt="Twitter" src="{{ asset('frontEnd/images/twitter.png') }}" width="25" style="display: block; border: none;">
                            </a>
                        </td>
                        <td align="right" width="30" style="border-collapse: collapse;">
                            <a href="#" style="color: #000001; text-decoration: none;">
                                <img alt="G Plus" src="{{ asset('frontEnd/images/gplus.png') }}" width="25" style="display: block; border: none;"></a>
                        </td>
                        <td align="right" width="30" style="border-collapse: collapse;">
                            <a href="#" style="color: #000001; text-decoration: none;">
                                <img alt="eMail" src="{{ asset('frontEnd/images/mail.png') }}" width="25" style="display: block; border: none;">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p style="font-size: 13px; font-family: Arial, sans-serif; color: #000001; line-height: 18px; margin: 0; padding: 0;">
                This email was sent to {{ $user->email }}.</p>
            <p style="font-size: 13px; font-family: Arial, sans-serif; color: #000001; line-height: 18px; margin: 0; padding: 0;">
                {{ env('APP_NAME') }} · 123 Fake Street, 6th Floor · San Francisco, CA 12345 · USA</p>
        </td>
    </tr>
    </tbody>
</table>




