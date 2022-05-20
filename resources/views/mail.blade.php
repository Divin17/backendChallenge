<h2> Laboratory Tests:</h2>
<ol>
   @foreach ($tests as $test)
   <li>{{ $test['name'] }} (id: {{$test['id']}})</li>
   @endforeach
</ol>
<h2> Addition data:</h2>
<p><strong>CT Scan:</strong> {{$ct_scan}}</p>
<p><strong>MRI:</strong> {{$mri}}</p><br>
<p>Regards,</p>
<p>Divin Fiston ISHIMWE</p>