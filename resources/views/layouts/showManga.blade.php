<!DOCTYPE html>
@extends('app')

@section('title', 'Home')

@section('content')
<div class="chapter">


    <!-- Webcomic Profile Section -->
    <div class="comic-profile">
        <div class="comic-info">
            <img src="{{$manga->image}}" alt="Comic Thumbnail" class="comic-thumbnail">
            <div class="comic-details">
                <h1>{{$manga->name}}</h1>
                <span class="creator">myndfury</span>
                <span class="status">ONGOING WEBCOMIC</span>
                <div class="stats">
                    <span>1.2m</span>
                    <span>&hearts; 7.6k</span>
                    <span>17.8k</span>
                </div>
                <div class="buttons">
                    <button class="read-button">Read First Chapter</button>
                    <button class="subscribe-button">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="comic-description">
            <p><strong>Episodes posted Bi-Weekly</strong></p>
            <p>The gods are dying. The harmony between man and god is thrown off balance, causing chaos to reign across the land...</p>
            <div class="tags">
                <span>Fantasy</span>
                <span>Action</span>
                <span>Horror</span>
                <span>Thriller</span>
                <span>Supernatural</span>
                <span>Drama</span>
            </div>
        </div>
    </div>

    <!-- Chapters Section -->
    <div class="chapters-section">
        <h2>Chapters</h2>
        <ul class="chapter-list">
            @foreach ( $chapters as $chapter )
                <a href="{{$chapter->link}}"><li><img class="chi" src="{{$chapter->image}}">Chapter 1:{{$chapter->n_chapter}} <span>{{$chapter->date}}</span></li></a>
            @endforeach

        </ul>
    </div>
</div>
@endsection

