@props(['footerLinks'=>''])
<x-base-layout title="Home" bodyClass="something">

    
  <x-layouts.header/>
  
  {{$slot}}

  <footer>

     <a href="#">Link 1</a>
     <a href="#">Link 2</a>
     {{$footerLinks}}
  
  </footer>


</x-base-layout>