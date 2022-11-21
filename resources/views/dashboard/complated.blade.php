@extends('layout')

@section('content')
<div class="wrapper bg-white">
    <div class="d-flex align-items-start justify-content-between">
        <div class="d-flex flex-column">
            <div class="h5">My Complated Todo's</div>
            <p class="text-muted text-justify">
                Here's a list of activities you have done
                <br>
                <a href="/todo/">Back</a>
            </p>
        </div>
        <div class="info btn ml-md-4 ml-0">
            <span class="fa-solid fa-check" title="complated"></span>
        </div>
    </div>
    <div class="work border-bottom pt-3">
        <div class="d-flex align-items-center py-2 mt-1">
            <div>
                <span class="text-muted fas fa-comment btn"></span>
            </div>
            <div class="text-muted">2 complated todos</div>
            <button class="ml-auto btn bg-white text-muted fas fa-angle-down" type="button" data-toggle="collapse"
                data-target="#comments" aria-expanded="false" aria-controls="comments"></button>
        </div>
    </div>
    <div id="comments" class="mt-1">
        <div class="comment d-flex align-items-start justify-content-between">
            <div class="mr-2">
                <label class="option">
                    <input type="checkbox" checked disabled>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="d-flex flex-column">
                <b class="text-justify">
                    This is the first task that has a really long name to test this.
                </b>
                <p class="text-muted">Completed <span class="date">Dec 16, 2019</span></p>
            </div>
            <div class="ml-md-4 ml-0">
                <span class="fas fa-undo btn"></span>
            </div>
        </div>
        <div class="comment d-flex align-items-start justify-content-between">
            <div class="mr-2">
                <label class="option">
                    <input type="checkbox" checked disabled>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="d-flex flex-column w-75">
                <b class="text-justify">
                    Add to Copper
                </b>
                <p class="text-muted">Completed <span class="date">Dec 16, 2019</span></p>
            </div>
            <div class="ml-auto">
                <span class="fas fa-undo btn"></span>
            </div>
        </div>
        <div class="comment d-flex align-items-start justify-content-between">
            <div class="mr-2">
                <label class="option">
                    <input type="checkbox" checked disabled>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="d-flex flex-column w-75">
                <b class="text-justify">
                    Check on-boarding status
                </b>
                <p class="text-muted">Completed <span class="date">Dec 16, 2019</span></p>
            </div>
            <div class="ml-auto">
                <span class="fas fa-undo btn"></span>
            </div>
        </div>
    </div>
</div>
@endsection