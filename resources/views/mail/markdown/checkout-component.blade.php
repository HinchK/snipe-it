@component('mail::message')
# {{ trans('mail.hello') }} {{ $target->assignedto->present()->fullName() }},

{{ trans('mail.new_item_checked') }}

@component('mail::table')
|        |          |
| ------------- | ------------- |
@if (isset($checkout_date))
| **{{ trans('mail.checkout_date') }}** | {{ $checkout_date }} |
@endif
| **{{ trans('general.component') }}** | {{ $item->name }} |
@if (isset($qty))
| **{{ trans('general.qty') }}** | {{ $qty }} |
@endif
@if (isset($item->manufacturer))
| **{{ trans('general.manufacturer') }}** | {{ $item->manufacturer->name }} |
@endif
@if ($note)
| **{{ trans('mail.additional_notes') }}** | {{ $note }} |
@endif
@if ($admin)
| **{{ trans('general.administrator') }}** | {{ $admin->present()->fullName() }} |
@endif
@endcomponent

@if (($req_accept == 1) && ($eula!=''))
    {{ trans('mail.read_the_terms_and_click') }}
@elseif (($req_accept == 1) && ($eula==''))
    {{ trans('mail.click_on_the_link_asset') }}
@elseif (($req_accept == 0) && ($eula!=''))
    {{ trans('mail.read_the_terms') }}
@endif

@if ($eula)
@component('mail::panel')
    {!! $eula !!}
@endcomponent
@endif

@if ($req_accept == 1)
**[✔ {{ trans('mail.i_have_read') }}]({{ $accept_url }})**
@endif


{{ trans('mail.best_regards') }}

{{ $snipeSettings->site_name }}

@endcomponent