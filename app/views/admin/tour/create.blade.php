@extends('layouts.admin_master')

@section('content')

    <h1>Add Tour Date:</h1>

    {{ Form::open(array('route' => 'admin.tour.store')) }}
        <ul class="form-fields">

            <li>
                {{ Form::label('date', 'DATE', array('class' => 'beta')) }}
                {{ Form::text('date',null, array('class' => 'text-input date-select', 'readonly' => 'readonly')) }}
            </li>

            <li>
                {{ Form::label('venue', 'VENUE', array('class' => 'beta')) }}
                {{ Form::text('venue', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('location', 'LOCATION', array('class' => 'beta')) }}
                {{ Form::text('location', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('support', 'SUPPORT (Optional)', array('class' => 'beta')) }}
                <span class="note">If there's a support group enter it here, otherwise leave it blank.</span>
                {{ Form::text('support', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('review_text', 'REVIEW BLURB (Optional)',  array('class' => 'beta')) }}
                <span class="note">If there's a review enter the blurb here, otherwise leave it blank.</span>
                {{ Form::textarea('review_text', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('review_source', 'REVIEW SOURCE (Optional)', array('class' => 'beta')) }}
                <span class="note">If there's a review enter the source here (just the text not the link), otherwise leave it blank.</span>
                {{ Form::text('review_source', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('review_link', 'REVIEW LINK (Optional)', array('class' => 'beta')) }}
                <span class="note">Enter the actual link to the full review here.</span>
                {{ Form::text('review_link', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::submit('Save', array('class' => 'button save')) }}
             <a class="cancel" href="{{ URL::route('admin.tour.index') }}">Cancel</a>
            </li>

        </ul>

    {{ Form::close() }}

    @if ($errors->any())
        <h2>Errors</h2>
        <ul>
            {{ implode('', $errors->all('<li>:message</li>')) }}
        </ul>
    @endif

</section>

@stop