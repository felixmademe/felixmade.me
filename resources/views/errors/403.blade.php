@extends('errors.layout')

@section('title', __('forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'forbidden'))
