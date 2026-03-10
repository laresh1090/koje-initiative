<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Webinar Registration</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f4; padding: 30px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width: 600px; width: 100%; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">

                    {{-- Orange Header Bar --}}
                    <tr>
                        <td style="background: linear-gradient(135deg, #EB5310 0%, #FAA019 100%); padding: 28px 32px; text-align: center;">
                            <h1 style="margin: 0; font-size: 22px; font-weight: 700; color: #ffffff; letter-spacing: -0.02em;">
                                New Webinar Registration
                            </h1>
                            <p style="margin: 6px 0 0; font-size: 14px; color: rgba(255,255,255,0.85); font-weight: 400;">
                                Creative Business Webinar - March 29th, 2026
                            </p>
                        </td>
                    </tr>

                    {{-- Body Content --}}
                    <tr>
                        <td style="padding: 32px;">
                            <p style="margin: 0 0 20px; font-size: 15px; color: #434343; line-height: 1.6;">
                                A new participant has registered for the Creative Business Webinar. Here are their details:
                            </p>

                            {{-- Details Table --}}
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e8e8e8; border-radius: 6px; overflow: hidden;">
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; background-color: #fafafa; border-bottom: 1px solid #e8e8e8; width: 140px;">
                                        Name
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; font-weight: 600; background-color: #fafafa; border-bottom: 1px solid #e8e8e8;">
                                        {{ $registration->full_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; border-bottom: 1px solid #e8e8e8; width: 140px;">
                                        Email
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; border-bottom: 1px solid #e8e8e8;">
                                        <a href="mailto:{{ $registration->email }}" style="color: #EB5310; text-decoration: none;">
                                            {{ $registration->email }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; background-color: #fafafa; border-bottom: 1px solid #e8e8e8; width: 140px;">
                                        Phone
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; background-color: #fafafa; border-bottom: 1px solid #e8e8e8;">
                                        {{ $registration->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; border-bottom: 1px solid #e8e8e8; width: 140px;">
                                        Source
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; border-bottom: 1px solid #e8e8e8;">
                                        @switch($registration->source)
                                            @case('social_media') Social Media @break
                                            @case('friend') Friend / Word of Mouth @break
                                            @case('email') Email Newsletter @break
                                            @case('website') Koje Website @break
                                            @case('event') Attended a Previous Event @break
                                            @case('other') Other @break
                                            @default {{ ucfirst($registration->source) }}
                                        @endswitch
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; background-color: #fafafa; width: 140px;">
                                        Registered At
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; background-color: #fafafa;">
                                        {{ $registration->created_at->format('M j, Y \a\t g:i A') }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="padding: 20px 32px 28px; border-top: 1px solid #e8e8e8;">
                            <p style="margin: 0; font-size: 13px; color: #999999; text-align: center; line-height: 1.5;">
                                View all registrations in your admin dashboard.<br>
                                This is an automated notification from <strong style="color: #1E252F;">Koje Group</strong>.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
