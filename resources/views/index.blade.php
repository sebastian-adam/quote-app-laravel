@extends('layouts.master')

@section('title')
    Trending Quotes
@endsection

@section('styles')
    <link rel="stylesheet" href="" type="text/css" />
@endsection

@section('content')
    <section class="quotes">
        <h1>Latest Quotes</h1>
        <article class="quote">
            <div><a href="#" class="delete">x</a></a></a></div>
            Quote text
            <div class="info">Created by <a href="#">Sebastian</a> on ....</div>
        </article>
        Pagination
    </section> 
     <section class="edit-quote">
         <h1>Add a quote</h1>
         <form>
             <div class="input-group">
                 <label for="author">Your name</label>
                 <input type="text" name="author" id="author" placeholder="Your Name" />
             </div>
             <div class="input-group">
                 <label for="content">Your name</label>
                 <textarea name="content" id="content" rows="5" placeholder="Quote" ></textarea>
             </div>
             <button type="submit" class="btn">Submit Quote</button>
             <input type="hidden" name="_token" value="{{ Session::token() }}"/>
         </form>
        
    </section>
@endsection