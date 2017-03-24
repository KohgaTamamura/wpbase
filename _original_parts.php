<?php
/*
Template Name: Parts Sample
*/

get_header(); ?>


  <div class="container">

    <div class="row bb">
      <div class="c12 columns">
        <h1>Overview</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation</p>
        <p>ullamco <a href="">laboris</a> nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <div class="row">
        <h2 class="c12 columns">Components</h2>

      <div class="c6 c12-s columns">
        <h3>Paragraph</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="c6 c12-s columns">
        <h3>Table</h3>
        <table>
          <tr>
            <th class="c3">heading</th>
            <th>contents</th>
          </tr>
          <tr>
            <td class="c3">1</td>
            <td>Applasdfasdfasdfasdafse</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Orange</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Kiwi</td>
          </tr>
        </table>
      </div>

    </div>


    <div class="row ">

      <div class="c3 c6-sm columns">
        <h4>List</h4>
        <ul>
          <li>Orange</li>
          <li>Apple</li>
          <li>Grape</li>
          <li>Water Melon</li>
        </ul>
      </div>

      <div class="c3 c6-sm columns">
        <h4>Heading List</h4>
        <ul class="listed">
          <li>Orange</li>
          <li>Apple</li>
          <li>Grape</li>
          <li>Water Melon</li>
        </ul>
      </div>

      <div class="c3 c12-sm columns">
        <h4>line List</h4>
        <ul class="lined">
          <li>Orange</li>
          <li>Apple</li>
          <li>Grape</li>
          <li>Water Melon</li>
        </ul>
      </div>

      <div class="c3 c12-sm columns">
        <h4>Horizontal List</h4>
        <ul class="hlist tal">
          <li>Orange</li>
          <li>Apple</li>
          <li>Grape</li>
          <li>Water Melon</li>
        </ul>
      </div>
      </div>

      <div class="row">

       <div class="c3 c12-sm columns">
        <h4>Text Decoration</h4>
        <p><i class="icon-1"></i>ICON</p>
        <p>SLant</p>
        <p>Bold</p>
        <p>Link</p>
      </div>

      <div class="c3 c12-sm columns">
        <h4 >Button</h4>
        <p><a class="btn" href="">BTN1</a></p>
        <p><a class="btn-accent wfit" href="">BTN2</a></p>
      </div>

      <div class="c6 c12-sm columns">
        <h4>Input</h4>
        <input placeholder="キーワードを入力" class="wfit" type="text">
        <select class="wfit" name="" id="">
          <option selected="selected" value=""></option>
          <option value="s1" >1</option>
          <option value="s2" >2</option>
          <option value="s3" >3</option>
        </select>
        <textarea placeholder="キーワードを入力"  class="wfit" name="" id="" ></textarea>
      </div>
    </div>


    <div class="row">
      <h4 class="c12 columns pb0">Image Raito</h4>
      <img class="c4 c12-m c12-s columns" src="http://dummyimage.com/600x300/4d494d/686a82.gif&text=Image raito 2:1" alt="2:1">
      <img class="c4 c6-m c12-s columns " src="http://dummyimage.com/600x450/4d494d/686a82.gif&text=Image raito 4:3" alt="1:1">
      <img class="c4 c6-m c12-s columns " src="http://dummyimage.com/600x600/4d494d/686a82.gif&text=Image raito 1:1" alt="1:1">
    </div>



  </div>
  

<?php get_footer(); ?>
