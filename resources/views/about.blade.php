<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/dashboard1/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/dashboard1/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/dashboard1/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/dashboard1/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/dashboard1/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/dashboard1/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/dashboard1/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/dashboard1/assets/images/favicon.png" />
  </head>
  <body>

    @include('layouts.sidebar')

<!-- resources/views/about.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>À propos de notre application</h1>
    <p>Bienvenue sur notre application de gestion des dossiers médicaux. Nous nous engageons à fournir des solutions de santé de haute qualité à nos utilisateurs.</p>

    <h2>Notre Mission</h2>
    <p>Notre mission est de faciliter la gestion des dossiers médicaux pour les professionnels de santé. Grâce à notre application, les médecins peuvent accéder rapidement et facilement aux informations de leurs patients, ce qui leur permet de fournir des soins plus efficaces.</p>

    <h2>Notre Équipe</h2>
    <p>Nous avons une équipe dédiée de développeurs, de médecins et de professionnels de la santé qui travaillent ensemble pour améliorer continuellement notre application. Nous croyons en l'importance de la collaboration et de l'innovation pour offrir les meilleures solutions possibles à nos utilisateurs.</p>

    <h2>Contactez-nous</h2>
    <p>Si vous avez des questions ou des suggestions, n'hésitez pas à nous contacter à l'adresse suivante : <a href="mailto:support@example.com">support@example.com</a>.</p>
</div>
@endsection
