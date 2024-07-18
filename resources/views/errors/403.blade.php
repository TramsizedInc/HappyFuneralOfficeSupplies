@extends('errors::minimal')

@section('title', __('You dont have access to the site'))
@section('code', '403')
@section('message', __('Forbidden'))
