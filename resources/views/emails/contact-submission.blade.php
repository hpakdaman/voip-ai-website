<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #1EC08D 0%, #1D7861 100%); color: white; padding: 20px; border-radius: 8px 8px 0 0; }
        .content { background: #f8f9fa; padding: 20px; border: 1px solid #e9ecef; }
        .field { margin-bottom: 15px; }
        .field label { font-weight: bold; color: #495057; display: block; margin-bottom: 5px; }
        .field value { background: white; padding: 8px; border-radius: 4px; display: block; border: 1px solid #dee2e6; }
        .footer { background: #343a40; color: white; padding: 15px; text-align: center; border-radius: 0 0 8px 8px; }
        .badge { background: #28a745; color: white; padding: 4px 8px; border-radius: 4px; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 New Contact Form Submission</h1>
            <p>Submitted on {{ $submitted_at }}</p>
        </div>
        
        <div class="content">
            <div class="field">
                <label>Name:</label>
                <div class="value">{{ $submission->name }}</div>
            </div>

            <div class="field">
                <label>Email:</label>
                <div class="value">{{ $submission->email }}</div>
            </div>

            @if($submission->phone)
            <div class="field">
                <label>Phone:</label>
                <div class="value">{{ $submission->phone }}</div>
            </div>
            @endif

            @if($submission->company)
            <div class="field">
                <label>Company:</label>
                <div class="value">{{ $submission->company }}</div>
            </div>
            @endif

            @if($submission->industry)
            <div class="field">
                <label>Industry:</label>
                <div class="value">{{ $submission->industry }}</div>
            </div>
            @endif

            <div class="field">
                <label>Subject:</label>
                <div class="value">{{ $submission->subject }}</div>
            </div>

            @if($submission->business_size)
            <div class="field">
                <label>Business Size:</label>
                <div class="value">{{ $submission->business_size }}</div>
            </div>
            @endif

            <div class="field">
                <label>Message:</label>
                <div class="value">{{ nl2br(e($submission->comments)) }}</div>
            </div>

            <div class="field">
                <label>IP Address:</label>
                <div class="value">{{ $submission->ip_address }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>This message was sent from the Sawtic Contact Form</p>
            <p><a href="{{ url('/admin/contacts') }}" style="color: #1EC08D;">View in Admin Panel</a></p>
        </div>
    </div>
</body>
</html>