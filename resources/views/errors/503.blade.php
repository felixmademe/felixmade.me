@extends('errors.layout')

@section('title', __('service unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'service unavailable'))
