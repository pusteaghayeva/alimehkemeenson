@extends('layouts.master')
@section('title', 'Sual-cavab')
@section('content')



<!-- Accordion -->
<div class="faq">
    <details class="accordion">
        <summary>Expand Accordion</summary>
        <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, doloribus quos sint saepe tempore reprehenderit distinctio, rerum quis culpa sequi <a href="#">animi deleniti</a> pariatur amet facilis rem, asperiores optio quia nemo.</p>
        </div>
    </details>

    <details id="event-emitter" class="accordion">
        <summary>Expand Accordion (check console for <code>accordionToggled</code> event)</summary>
        <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, doloribus quos sint saepe tempore reprehenderit distinctio, rerum quis culpa sequi <a href="#">animi deleniti</a> pariatur amet facilis rem, asperiores optio quia nemo.</p>
        </div>

        <summary>Expand Accordion</summary>
        <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, doloribus quos sint saepe tempore reprehenderit distinctio, rerum quis culpa sequi <a href="#">animi deleniti</a> pariatur amet facilis rem, asperiores optio quia nemo.</p>
        </div>
    </details>

    <details id="event-emitter" class="accordion">
        <summary>Expand Accordion (check console for <code>accordionToggled</code> event)</summary>
        <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, doloribus quos sint saepe tempore reprehenderit distinctio, rerum quis culpa sequi <a href="#">animi deleniti</a> pariatur amet facilis rem, asperiores optio quia nemo.</p>
        </div>
        <summary>Expand Accordion</summary>
        <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, doloribus quos sint saepe tempore reprehenderit distinctio, rerum quis culpa sequi <a href="#">animi deleniti</a> pariatur amet facilis rem, asperiores optio quia nemo.</p>
        </div>
    </details>

    <details id="event-emitter" class="accordion">
        <summary>Expand Accordion (check console for <code>accordionToggled</code> event)</summary>
        <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, doloribus quos sint saepe tempore reprehenderit distinctio, rerum quis culpa sequi <a href="#">animi deleniti</a> pariatur amet facilis rem, asperiores optio quia nemo.</p>
        </div>
    </details>
</div>




@endsection