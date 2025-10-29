<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            line-height: 1.6; 
            color: #333; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f4f4;
        }
        .container { 
            max-width: 600px; 
            margin: 20px auto; 
            padding: 0; 
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header { 
            background: #0077ff; 
            color: white; 
            padding: 30px 20px; 
            text-align: center; 
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
        }
        .content { 
            padding: 30px 20px; 
        }
        .field { 
            margin-bottom: 20px; 
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .field:last-child {
            border-bottom: none;
        }
        .label { 
            font-weight: bold; 
            color: #0077ff; 
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }
        .value { 
            margin-top: 5px; 
            font-size: 16px;
            color: #333;
        }
        .value a {
            color: #0077ff;
            text-decoration: none;
        }
        .value a:hover {
            text-decoration: underline;
        }
        .footer { 
            padding: 20px; 
            text-align: center; 
            font-size: 12px; 
            color: #666; 
            background: #f9f9f9;
        }
        .highlight {
            background: #f0f8ff;
            padding: 15px;
            border-left: 4px solid #0077ff;
            margin: 20px 0;
        }
        .service-badge {
            display: inline-block;
            background: #0077ff;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
            <p>ECIS Solutions Website</p>
        </div>
        <div class="content">
            <div class="field">
                <div class="label">Name</div>
                <div class="value">{{ $submission->first_name }} {{ $submission->last_name }}</div>
            </div>
            <div class="field">
                <div class="label">Email</div>
                <div class="value"><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></div>
            </div>
            <div class="field">
                <div class="label">Phone</div>
                <div class="value"><a href="tel:{{ $submission->phone }}">{{ $submission->phone }}</a></div>
            </div>
            <div class="field">
                <div class="label">Service Interest</div>
                <div class="value">
                    @if($submission->service)
                        <span class="service-badge">{{ $submission->service }}</span>
                    @else
                        <em>Not specified</em>
                    @endif
                </div>
            </div>
            @if($submission->message)
            <div class="field">
                <div class="label">Message</div>
                <div class="value">{{ $submission->message }}</div>
            </div>
            @endif
            <div class="highlight">
                <div class="field">
                    <div class="label">Submitted</div>
                    <div class="value">{{ $submission->created_at->format('F j, Y \a\t g:i A') }}</div>
                </div>
                <div class="field">
                    <div class="label">IP Address</div>
                    <div class="value">{{ $submission->ip_address }}</div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>This email was sent from the ECIS Solutions contact form.</p>
            <p>Reply directly to this email to respond to the customer.</p>
        </div>
    </div>
</body>
</html>
