@extends('layouts.frontend')

@section('page-title', 'Privacy-Policy')

@push('page-style')
  <style>
    .contact-area p {
      margin-bottom: 25px
    }

    .contact-area ul {
      margin-bottom: 25px
    }

    .contact-area ul li {
      margin-bottom: 10px
    }

    .contact-area .title {
      margin-bottom: 10px;
      font-size: 20px;
    }

  </style>
@endpush


@section('content')

  <div class="site-breadcrumb">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
      <h2 class="breadcrumb-title">Privacy Policy</h2>
      <ul class="breadcrumb-menu">
        <li><a href="{{ route('home') }}"><i class="far fa-home"></i> Home</a></li>
        <li class="active">Privacy Policy</li>
      </ul>
    </div>
  </div>

  <div class="contact-area pd-50">
    <div class="container">
      <div class="contact-wrapper">
        <div class="row">
          <div class="col-md-12">
            <p>This Privacy Policy describes how your personal information is collected, used, and shared when you visit
              or make a purchase from sellfastpayfast.com</p>

            <h4 class="title">PERSONAL INFORMATION WE COLLECT</h4>
            <p>When you visit the Site, we automatically collect certain information about your device, including
              information about your web browser, IP address, time zone, and some of the cookies that are installed on
              your device. Additionally, as you browse the Site, we collect information about the individual web pages or
              products that you view, what websites or search terms referred you to the Site, and information about how
              you interact with the Site. We refer to this automatically-collected information as “Device Information”.
            </p>
            <p>We collect Device Information using the following technologies: – “Cookies” are data files that are placed
              on your device or computer and often include an anonymous unique identifier. For more information about
              cookies, and how to disable cookies, visit http://www.allaboutcookies.org. – “Log files” track actions
              occurring on the Site, and collect data including your IP address, browser type, Internet service provider,
              referring/exit pages, and date/time stamps. – “Web beacons”, “tags”, and “pixels” are electronic files used
              to record information about how you browse the Site.</p>
            <p>
              Additionally when you make a purchase or attempt to make a purchase through the Site, we collect certain
              information from you, including your name, billing address, payment information (including bank account
              details, email address and phone numbers). We refer to this information as “Order Information”.
            </p>
            <p>When we talk about “Personal Information” in this Privacy Policy, we are talking both about Device
              Information and Order Information.</p>

            <h4 class="title">HOW DO WE USE YOUR PERSONAL INFORMATION?</h4>
            <p>We use the Order Information that we collect generally to fulfill any orders placed through the Site
              (including processing your payment information, and providing you with invoices and/or order confirmations).
              Additionally, we use this Order Information to:</p>
            <ul class="list-unstyled">
              <li>- Communicate with you;</li>
              <li>- Screen our orders for potential risk or fraud; and</li>
              <li>- When in line with the preferences you have shared with us, provide you with information or advertising
                relating to our products or services.
                We use the Device Information that we collect to help us screen for potential risk and fraud (in
                particular, your IP address), and more generally to improve and optimize our Site (for example, by
                generating analytics about how our customers browse and interact with the Site, and to assess the success
                of our marketing and advertising campaigns).</li>
            </ul>
            <h4 class="title">SHARING YOUR PERSONAL INFORMATION</h4>
            <p>We share your Personal Information with third parties to help us use your Personal Information, as
              described above. We also use Google Analytics to help us understand how our customers use the Site — you can
              read more about how Google uses your Personal Information here:
              https://www.google.com/intl/en/policies/privacy/. You can also opt-out of Google Analytics here:
              https://tools.google.com/dlpage/gaoptout.</p>
            <p>Finally, we may also share your Personal Information to comply with applicable laws and regulations, to
              respond to a subpoena, search warrant or other lawful request for information we receive, or to otherwise
              protect our rights.</p>

            <h4 class="title">BEHAVIOURAL ADVERTISING</h4>
            <p>As described above, we use your Personal Information to provide you with targeted advertisements or
              marketing communications we believe may be of interest to you. For more information about how targeted
              advertising works, you can visit the Network Advertising Initiative’s (“NAI”) educational page at
              http://www.networkadvertising.org/understanding-online-advertising/how-does-it-work.</p>
            <p>You can opt out of targeted advertising by using the links below: – Facebook:
              https://www.facebook.com/settings/?tab=ads – Google: https://www.google.com/settings/ads/anonymous – Bing:
              https://advertise.bingads.microsoft.com/en-us/resources/policies/personalized-ads
              Additionally, you can opt out of some of these services by visiting the Digital Advertising Alliance’s
              opt-out portal at: http://optout.aboutads.info/.</p>
            <h4 class="title">
              DO NOT TRACK
            </h4>
            <p>Please note that we do not alter our Site’s data collection and use practices when we see a Do Not Track
              signal from your browser.</p>
            <h4 class="title">
              YOUR RIGHTS
            </h4>
            <p>You have the right to access personal information we hold about you and to ask that your personal
              information be corrected, updated, or deleted. If you would like to exercise this right, please contact us
              through the contact information below.</p>
            <p>Additionally, we note that we are processing your information in order to fulfill contracts we might have
              with you (for example if you make an order through the Site), or otherwise to pursue our legitimate business
              interests listed above. Additionally, please note that your information will be transferred outside of
              Africa, Europe, including to Canada and the United States.</p>
            <h4 class="title">
              DATA RETENTION
            </h4>
            <p>When you place an order through the Site, we will maintain your Order Information for our records unless
              and until you ask us to delete this information.</p>

            <h4 class="title">CHANGES</h4>
            <p>We may update this privacy policy from time to time in order to reflect, for example, changes to our
              practices or for other operational, legal or regulatory reasons.</p>
            <h4 class="title">MINORS</h4>
            <p>The Site is not intended for individuals under the age of [10] .</p>
            <h4 class="title">CONTACT US</h4>
            <p>For more information about our privacy practices, if you have questions, or if you would like to make a
              complaint, please contact us by e‑mail at contact@sellfastpayfast.com.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
