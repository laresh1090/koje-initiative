<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
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
                                New Contact Message
                            </h1>
                            <p style="margin: 6px 0 0; font-size: 14px; color: rgba(255,255,255,0.85); font-weight: 400;">
                                {{ $contactMessage->subject }}
                            </p>
                        </td>
                    </tr>

                    {{-- Body Content --}}
                    <tr>
                        <td style="padding: 32px;">
                            <p style="margin: 0 0 20px; font-size: 15px; color: #434343; line-height: 1.6;">
                                A new contact message has been submitted through the Koje Group website. Here are the details:
                            </p>

                            {{-- Details Table --}}
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e8e8e8; border-radius: 6px; overflow: hidden;">
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; background-color: #fafafa; border-bottom: 1px solid #e8e8e8; width: 140px;">
                                        Name
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; font-weight: 600; background-color: #fafafa; border-bottom: 1px solid #e8e8e8;">
                                        {{ $contactMessage->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; border-bottom: 1px solid #e8e8e8; width: 140px;">
                                        Email
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; border-bottom: 1px solid #e8e8e8;">
                                        <a href="mailto:{{ $contactMessage->email }}" style="color: #EB5310; text-decoration: none;">
                                            {{ $contactMessage->email }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; background-color: #fafafa; border-bottom: 1px solid #e8e8e8; width: 140px;">
                                        Phone
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; background-color: #fafafa; border-bottom: 1px solid #e8e8e8;">
                                        {{ $contactMessage->phone ?: 'Not provided' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; border-bottom: 1px solid #e8e8e8; width: 140px;">
                                        Subject
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; font-weight: 600; border-bottom: 1px solid #e8e8e8;">
                                        {{ $contactMessage->subject }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; background-color: #fafafa; border-bottom: 1px solid #e8e8e8; width: 140px; vertical-align: top;">
                                        Message
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F; background-color: #fafafa; border-bottom: 1px solid #e8e8e8; line-height: 1.6;">
                                        {!! nl2br(e($contactMessage->message)) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 16px; font-size: 13px; font-weight: 600; color: #888888; text-transform: uppercase; letter-spacing: 0.05em; width: 140px;">
                                        Received At
                                    </td>
                                    <td style="padding: 12px 16px; font-size: 15px; color: #1E252F;">
                                        {{ $contactMessage->created_at->format('M j, Y \a\t g:i A') }}
                                    </td>
                                </tr>
                            </table>

                            {{-- Reply Button --}}
                            <div style="text-align: center; margin-top: 24px;">
                                <a href="mailto:{{ $contactMessage->email }}?subject=Re: {{ $contactMessage->subject }}"
                                   style="display: inline-block; background: linear-gradient(135deg, #EB5310, #FAA019); color: #fff; padding: 12px 32px; border-radius: 6px; font-size: 15px; font-weight: 600; text-decoration: none;">
                                    Reply to {{ $contactMessage->name }}
                                </a>
                            </div>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="padding: 20px 32px 28px; border-top: 1px solid #e8e8e8;">
                            <p style="margin: 0; font-size: 13px; color: #999999; text-align: center; line-height: 1.5;">
                                This is an automated notification from <strong style="color: #1E252F;">Koje Group</strong>.<br>
                                View and manage all contact messages in your admin dashboard.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
