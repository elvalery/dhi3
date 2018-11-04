<div>TYPE: {{ trans('dhi.contact-type.' . $contact->type) }}</div>
@if ($contact->name)<div>Name: {{ $contact->name }}</div>@endif
@if ($contact->email)<div>Email: {{ $contact->email }}</div>@endif
@if ($contact->phone)<div>Phone: {{ $contact->phone }}</div>@endif
@if ($contact->description)<div>Description: {{ $contact->description }}</div>@endif
@if ($contact->actions->count())<div>Services: @foreach ($contact->actions as $action) {{ $action->name }}, @endforeach </div>@endif
@if ($contact->file)<div>File: {{ asset('storage/' . $contact->file) }})}}</div>@endif
