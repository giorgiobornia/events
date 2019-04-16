<!DOCTYPE html>

 
<html>
<head>

 <?php $sem_mydepth = "../../"; ?>
 <?php   include($sem_mydepth . "../src/php/functions.php"); ?>

 <?php include($sem_mydepth . "../sem_head_links.php");  ?>
 
</head>

<body>



 <?php Seminars::navigation_bar(); ?>
 <?php Seminars::main_banner("Applied Mathematics"); ?>

 
 
 <div class="container text-center">

 <br>
 
 



<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>

 <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="./images/DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
 Thursday, January 28, 11am, MATH 014   
 </strong>
 <br>

 <em>
 Colloquium Talk for Chair position 
 </em> <br>
   Magdalena Toda
 <br>
<!--  <a  id="toggle_abst_feb10"> abstract </a> -->
  </td>
</tr>
 </table>
 
 

<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>

 <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="./images/DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
 Thursday, February 4, 11am, MATH 014  
 </strong>
 <br>

 <em>
 Colloquium Talk for Chair position 
 </em> <br>
 T.Y. Tam
 <br>
<!--  <a  id="toggle_abst_feb10"> abstract </a> -->
  </td>
</tr>
 </table>

<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>

 <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="./images/DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
 Tuesday, February 9, 11am, MATH 014  
 </strong>
 <br>

 <em>
 Colloquium Talk for Chair position 
 </em> <br>
    Javier Rojo 
 <br>
<!--  <a  id="toggle_abst_feb10"> abstract </a> -->
  </td>
</tr>
 </table>

<!--<script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_feb10").click(
       function(){
          $("span#abst_feb10").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>-->


<span class="abst" id="abst_feb10"> 
 TBA
 </span>

<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
<td> 
<img class="sem_image img-circle"  src="./images/HoangLuan_square.jpg" alt="image">  </td>
 <td> 
 <strong> 
  Wednesday, February 17<!--, 4pm, MATH tbd-->  
 </strong>
 <br>

 <em>
 On the continuity of families of global, pullback and uniform attractors.
 </em>
 <br>
  Luan T. Hoang, Texas Tech University
 <br>
 <a id="toggle_abst_feb17"> abstract </a>
 </td>
 
</tr> 
<!--     <a href="sem_print.php"> print </a> -->

 </table>

<!-- I guess we're not going to generate a file but we're passing it  -->
<!-- to the minimal template -->

<!-- I think we could do a small php file that is included BOTH HERE and by the TEMPLATE FILE -->
<!-- The idea is that only one template file generates it all -->


<script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_feb17").click(
       function(){
          $("span#abst_feb17").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>



<span class="abst" id="abst_feb17"> 

Let $\Lambda$ be a complete metric space, and let $\{S_\lambda(\cdot):\ \lambda\in\Lambda\}$ 
be a parametrized family of semigroups
with global attractors $A_\lambda$. 
We assume that there exists a fixed bounded set $D$ such that 
$A_\lambda\subset D$ for every $\lambda\in\Lambda$. 
We show that the attractors $A_\lambda$ are continuous with respect to the Hausdorff distance
at a residual set of parameters $\lambda$ in the sense of Baire Category.
This result is then extended to the pullback and uniform attractors
of a family of processes for non-autonomous systems. 
In applications, we consider the Lorenz system and two-dimensional Navier-Stokes equations.
This is joint work with Eric Olson (University of Nevada, Reno)
and James Robinson (University of Warwick).

<!--When $a \ne 0$, there are two solutions to \(ax^2 + bx + c = 0\) and they are
$$x = {-b \pm \sqrt{b^2-4ac} \over 2a}.$$-->

</span>


 <!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<!--  http://stackoverflow.com/questions/14186565/jquery-hide-and-show-toggle-div-with-plus-and-minus-icon -->
 <br>
 
 <table class="sem_item">
<tr>
<td>  
<img class="sem_image img-circle" src="./images/CelikEmine_square.jpg" alt="image">  
</td>
 <td> 
 <strong> 
 Wednesday, February 24 <!--, 4pm, MATH tbd-->  
 </strong> <br>
 <em> 
   Slightly compressible fluids in heterogeneous porous media
 </em>
 <br>
 Emine Celik, Texas Tech University
 <br>
 <a id="toggle_abst_feb24"> abstract </a>
 
<!--  <a href="#" class="show_hide">Show/hide</a> -->

  </td>
 </tr>
</table>
 
<script>

// // // // // $(document).ready(function () {
// // // // //   $(".slidingDiv").hide();
// // // // // 
// // // // //   $('.show_hide').click(function (e) {
// // // // //     $(".slidingDiv").slideToggle("fast");
// // // // //     var val = $(this).text() == "-" ? "+" : "-";
// // // // //     $(this).hide().text(val).fadeIn("fast");
// // // // //     e.preventDefault();
// // // // //   });
// // // // // });



// // // $(document).ready(function(){
// // //   $(".slidingDiv").hide();

// // //   $(".show_hide").addClass("plus").show();
// // //   $('.show_hide').toggle(
// // //       function(){
// // //           $(".slidingDiv").slideDown();
// // //           $(this).addClass("minus");
// // //           $(this).removeClass("plus");
// // //       }
// // // //       ,
// // // //       function(){
// // // //           $(".slidingDiv").slideUp();
// // // //           $(this).addClass("plus");
// // // //           $(this).removeClass("minus");
// // // //       }
// // //   );
// // // });




$(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_feb24").click(
       function(){
          $("span#abst_feb24").toggle();
        }
      );  //end click
    }
  );  //end ready

</script>


<span class="abst" id="abst_feb24"> 
  We study the generalized Forchheimer flows of slightly compressible fluids in heterogeneous porous media.
The media's porosity and coefficients of the Forchheimer equation  are functions of the spatial variables.
The partial differential equation for the pressure is degenerate in its gradient and can be both singular and degenerate in the spatial variables.
Suitable weighted Lebesgue norms for the pressure, its gradient and time derivative are estimated.
The continuous dependence on the initial and boundary data is established for the pressure and its gradient with respect to those  corresponding  norms.
Asymptotic estimates  are derived even for unbounded boundary data as time tends to infinity. Moreover, we obtain the estimates for the $L^\infty$-norms of the pressure and its time derivative in terms of the initial and  the time-dependent boundary data. This is a joint work with Luan Hoang.
 </span>

<!-- <div class="slidingDiv" style="display: none;"> -->
<!-- Check out the updated jQuery plugin for doing this: -->
<!-- </div>  -->

 
<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="./images/KhaMinh_square.jpg" alt="image">  </td>
 <td> 
 <strong> 
 Wednesday, March 2 <!--, 4pm, MATH tbd-->  
 </strong>
 <br>

 <em>
 Green’s function asymptotics of periodic elliptic operators on Abelian coverings of compact manifolds
 </em> <br>
 Minh Kha, Texas A&amp;M University 
 <br>
    <a id="toggle_abst_march2"> abstract </a>
  </td>
</tr>
 </table>
 
<script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_march2").click(
       function(){
          $("span#abst_march2").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<span class="abst" id="abst_march2"> 
 Green’s function behavior near and at a spectral edge of a periodic
operator is one of what was called by M. Birman and T. Suslina
“threshold properties.” I.e., it depends upon the infinitesimal
structure of the dispersion relation at the spectral edge. For a
"generic" periodic second-order elliptic operators on a co-compact
abelian cover, we will discuss the asymptotics at infinity of the
Green's functions near and at the spectral gap edge as long as the
dispersion relation of the operator has a non-degenerate extremum there.
Previously, analogous results have been known for the Euclidean case
only. One of the interesting features discovered is that the rank of the
deck group plays more important role than the dimension of the manifold.
</span>
 

<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/AlexeySukhinin_square.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
    Monday, March 7, 4pm, MATH 109  
 </strong>

 <br>

 <em>
   Propagation and Dynamics of Wave Envelope under Extreme Light-Matter Interaction 
 </em> 

  <br>
     Alexey Sukhinin, Southern Methodist University, Dallas 
  <br>
 <a  id="toggle_abst_march7"> abstract </a>
 
    </td>
  </tr>
  
 </table>
 
<script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_march7").click(
       function(){
          $("span#abst_march7").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<span class="abst" id="abst_march7"> 
 Light filamentation in air is a field with two decades of research history. It is the 
phenomenon that describes the propagation of high intensity laser pulses over the long distances 
without diffraction due to the guiding mechanism of air ionization. Filament propagation is possible 
when self-focusing of high intensity beams is balanced with the de-focusing effect of ionized 
plasma channel. In this talk, I will describe mathematical models of filamentation in air and new 
trends in this field.
</span>



 
 
<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/DoubleT.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
     March 14-18
 </strong>

 <br>

<!-- <em>
    TBA 
 </em> -->

  <br>
Spring Break. No talks.  
  <br>

   </td>
  </tr>
  
 </table>
 

<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/DoubleT.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
     Tuesday, March 22, 3:30pm, CHEM 101  
 </strong>

 <br>

 <em>
    SIAM Colloquium Talk 
 </em> 

  <br>
     Dorothy Wallace, Dartmouth College
  <br>
<!--  <a  id="toggle_abst_march22"> abstract </a> -->

  </td>
  </tr>
  
 </table>
 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_march22").click(
       function(){
          $("span#abst_march22").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<!--<span class="abst" id="abst_march22"> 
 TBA
</span>-->

<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/mondaini_c_square.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
     Thursday, March 31 <!--, 4pm, MATH tbd-->  
 </strong>

 <br>

 <em>
    A discrete data assimilation scheme for the solutions of the 2D Navier-Stokes equations and their statistics 
 </em> 

  <br>
     Cecilia Mondaini, Texas A&amp;M University 
  <br>
 <a  id="toggle_abst_march31"> abstract </a>

  </td>
  </tr>
  
 </table>
 

 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_march31").click(
       function(){
          $("span#abst_march31").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<span class="abst" id="abst_march31"> 
 The idea of data assimilation is to obtain a good approximation of the state of a certain physical system by combining observational data with dynamical principles pertaining to the underlying mathematical model. It is widely used in many fields of geosciences, mainly for oceanic and atmospheric forecasting. Recently, A. Azouani, E. Olson and E. Titi introduced a new continuous in time data assimilation algorithm inspired by ideas from control theory that is applicable to a wide range of dissipative evolution equations. In this talk, I will show how to adapt this previous data assimilation algorithm, in the case of the 2D Navier-Stokes equations, to the more realistic setting of observational measurements that are discrete in space and time and that may also be contaminated by systematic errors. We will see that, under suitable conditions on the relaxation parameter, the spatial resolution of the mesh and the time step between successive measurements, an asymptotic in time estimate of the difference between the approximating solution and the reference solution can be obtained, in an appropriate norm, which shows exponential convergence up to a term which depends on the size of the errors. A stationary statistical analysis of this spatio-temporal discrete data assimilation algorithm will also be provided. This is a joint work with C. Foias and E. Titi.
</span>



<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/robcoyne_square.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
     Wednesday, April 6 <!--, 4pm, MATH tbd-->  
 </strong>

 <br>

 <em>
    Making Gravitational Wave CoCoA: A cross-correlation approach for detecting intermediate-duration gravitational waves
 </em> 
<!-- 3:30 PM in CHEM 101 -->
  <br>
     Rob Coyne, Department of Physics, TTU
  <br>
 <a  id="toggle_abst_april6"> abstract </a>

  </td>
  </tr>
  
 </table>
 
<!--<span class="abst"> 
  TBA
</span>-->

<script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_april6").click(
       function(){
          $("span#abst_april6").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<span class="abst" id="abst_april6"> 
 The recent ground-breaking detection of gravitational waves (GWs) by Advanced LIGO marks the beginning of a new era in astronomy, but it is only the first step towards a greater understanding of the universe. Historically, searches for GW signals have fallen into two coarsely defined categories: those looking for short but powerful bursts of GWs, or those looking for long lived, continuous GW emission from weaker sources. However, there is reason to believe that many GW signals exist that fall into neither category, and for which traditional GW searches are poorly suited. Here we describe a novel application of a generalized cross-correlation technique (Coyne et al. 2016, Phys. Rev. D, submitted to PRD) optimized for the detection of such "intermediate duration” signals that will contribute to an entirely new class of next-generation GW searches.
</span>




<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/DoubleT.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
     Wednesday, April 13 - Thursday, April 14  
 </strong>

 <br>

 <em>
    Distinguished Lecture Series
 </em> 
  <br>
     Reinhard Laubenbacher, University of Connecticut Health Center 
  <br>
<!--  <a  id="toggle_abst_april13"> abstract </a> -->

  </td>
  </tr>
  
 </table>
 
<!--<span class="abst"> 
  TBA
</span>-->

<!--<script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_april13").click(
       function(){
          $("span#abst_april13").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<span class="abst" id="abst_april13"> 
 TBA
</span>-->

<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/JayawardhanaRangana_square.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
     Wednesday, April 20 <!--, 4pm, MATH tbd-->  
 </strong>

 <br>

 <em>
   Iterative Learning Control for MIMO Systems
 </em> 

  <br>
     Rangana  Jayawardhana, Texas Tech University
  <br>
 <a  id="toggle_abst_april20"> abstract </a>

  </td>
  </tr>
  
 </table>
 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_april20").click(
       function(){
          $("span#abst_april20").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<span class="abst" id="abst_april20"> 
 Iterative Learning Control (ILC) is based on the notion that a system that executes the same task repeatedly can learn from the previous executions to improve its performance. ILC algorithm is particularly useful for systems with model uncertainties and repeated disturbances as only a minimal knowledge about the system parameters is necessary for convergence. In practice, although it is straight forward to implement the ILC algorithm for SISO systems, it is not so for MIMO systems. In here we introduce an extension of the SISO ILC algorithm that can be applied to MIMO systems.
</span>
 


<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/KeGuoyi_square.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
     Wednesday, April 27 <!--, 4pm, MATH tbd-->  
 </strong>

 <br>

 <em>
    Block triangular preconditioners for linearization schemes of the Rayleigh-Benard convection problem
 </em> 

  <br>
     Guoyi Ke, Texas Tech University
  <br>
 <a  id="toggle_abst_april27"> abstract </a>

  </td>
  </tr>
  
 </table>
 
<!--<span class="abst"> 
  TBA
</span>-->

 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_april27").click(
       function(){
          $("span#abst_april27").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<span class="abst" id="abst_april27"> 
 In this presentation, we compare two block triangular preconditioners for different linearizations of the Rayleigh-
Benard convection problem discretized with finite element methods. The two preconditioners differ in the
nested or non-nested use of a certain approximation of the Schur complement associated to the Navier-Stokes
block. First, bounds on the generalized eigenvalues are obtained for the preconditioned systems linearized
with both Picard and Newton methods. Then, the performance of the proposed preconditioners is studied
in terms of computational time. This investigation reveals some inconsistencies in the literature that are
hereby discussed. We observe that the non-nested preconditioner works best both for the Picard and for
the Newton cases. Therefore, we further investigate its performance by extending its application to a mixed
Picard-Newton scheme. Numerical results of two- and three-dimensional cases show that the convergence
is robust with respect to the mesh size. We also give a characterization of the performance of the various
preconditioned linearization schemes in terms of the Rayleigh number.
</span>



<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>
 <table class="sem_item">
<tr>
   <td>
     <img class="sem_image img-circle"  src="./images/ParagodaThanuja_square.jpg" alt="image">  
   </td>
 <td> 

 <strong> 
     Wednesday, May 4 <!--, 4pm, MATH tbd-->  
 </strong>

 <br>

 <em>
    Willmore energy and Generalized Willmore energy
 </em> 

  <br>
     Thanuja Paragoda, Texas Tech University 
  <br>
 <a  id="toggle_abst_may4"> abstract </a>
 
    </td>
  </tr>
  
 </table>
 
<script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_may4").click(
       function(){
          $("span#abst_may4").toggle();
        }
      );  //end click
    }
  );  //end ready
</script>


<span class="abst" id="abst_may4"> 
 We study a Generalized Willmore flow for graphs and its numerical applications. 
 First, we derive the time dependent equation which describes the geometric evolution
 of a Generalized Willmore flow in the graph case. This equation is
 recast in divergence form as a coupled system of second order nonlinear PDEs.
 Furthermore, we study finite element numerical solutions for steady-state cases
 obtained with the help of the FEMuS library (Finite Element Multiphysics
 Solver). We use automatic differentiation (AD) tools to compute the exact Jacobian 
 of the coupled PDE system subject to Dirichlet boundary conditions.
 To validate our numerical algorithm, we compare steady-state Willmore flow
 solutions with known analytical solutions.
</span>




<!-- =========================== -->


<br>
<br>
<br>
<br>



 </div>
</body>
</html>

<!-- here i should put an icon to print the abstract in printable form -->
<!-- I don't think we should generate a pdf here, but rather an html page. So, we avoid needing the plugin -->
<!-- I want to pick the code from what I wrote above so I don't have to copy it -->
<!-- The input will come directly from this webpage, or from an external snippet, maybe better -->
<!-- I will include that external snippet both here and in the template for printing -->
<!-- I will define a bunch of variables in php just like the ones I define in latex -->

<!-- Devo creare un DATABASE di OGGETTI di una certa classe TALK, i cui MEMBRI sono: -->

<!-- Leggero' da questo database SIA per la pagina del seminario SIA per la pagina da STAMPARE -->

<!--Seminar in Applied Mathematics

Department of Mathematics and Statistics 

Texas Tech University

current_title

current_author

current_affiliation

current_coords

current_abstract-->
