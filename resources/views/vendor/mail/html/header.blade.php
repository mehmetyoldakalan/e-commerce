@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img style="width: 290px; height: 230px" src="{{asset('storage/syflogo.png')}}" alt="">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
