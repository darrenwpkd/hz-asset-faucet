@extends('layouts.master')

@section('content')
      <div class="span12">
        <h1 class="page_title">Horizon News</h1>


        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
      </div>

      <div class="divider"></div>
      <div class="blog_container">
      <?php
        $posts = array(
            array(
                'url' => '#',
                'title' => 'NHZ rebrands to Horizon and launches new website',
                'body' => 'Lorem ipsum dolor sit amet, conctetur adipisicing elit. Mollitia sunt id recusandae iure ea beatvelim eum molestias vel hic maiores maxime impedit nesciunt porro sint illo dolores rem.',
                'date' => 'November 14, 2014',
                'image_url' => 'http://placehold.it/500x500',
            ),
            array(
                'url' => '#',
                'title' => 'Horizon releases v3.2.8 which introduces the digital goods marketplace',
                'body' => 'Lorem ipsum dolor sit amet, conctetur adipisicing elit. Mollitia sunt id recusandae iure ea beatvelim eum molestias vel hic maiores maxime impedit nesciunt porro sint illo dolores rem.',
                'date' => 'November 12, 2014',
                'image_url' => 'http://placehold.it/500x500',
            ),
            array(
                'url' => '#',
                'title' => 'Horizon ThinkTank community project announced',
                'body' => 'Lorem ipsum dolor sit amet, conctetur adipisicing elit. Mollitia sunt id recusandae iure ea beatvelim eum molestias vel hic maiores maxime impedit nesciunt porro sint illo dolores rem.',
                'date' => 'November 8, 2014',
                'image_url' => 'http://placehold.it/500x500',
            ),
        );
      ?>

      @foreach($posts as $post)

        <div class="span4">
          <div class="blog-item">
            <div class="img-container-blog" style="background-image: url({{ $post['image_url'] }});"></div>
            <div class="blog-boddy">
              <div class="the-title">
                <h1><a href="{{ $post['url'] }}">{{ $post['title'] }}</a></h1>
              </div>
              <p>{{ $post['body'] }}</p>
              <div class="metas">
                <div class="the-date"><a href="#"><span class="calendar gray icon"></span>{{ $post['date'] }}</a></div>
                <a href="#" class="read_more_small"><i class="fa fa-plus"></i></a>
                <div class="clear"></div>
              </div>
              <!--metas--> 
              
            </div>
          </div>
          <!--blog-item--> 
          
        </div>
        <!--span4-->

      @endforeach
        
      </div>
      <!--blog-container--> 

@stop