<!DOCTYPE html>

 
<html>
<head>

 <?php $sem_mydepth = "../../"; ?>
 <?php include($sem_mydepth . "sem_head_links.php");  ?>
 <?php include($sem_mydepth . "sem_title.php");  ?>
 
</head>

<body>



 <?php include($sem_mydepth . "sem_navbar.php");  ?>
 <?php include($sem_mydepth . "sem_banner.php");  ?>

 <?php $mysem = "Spring 2019"; ?>
 <?php $myroom = "MATH 110"; ?>
 <?php $mytime = "Wednesday, 4-5 pm"; ?>
 <?php include($sem_mydepth . "sem_coords.php");  ?>
<!-- Maybe I should make a database for the seminar coords -->
 
 
 <div class="container text-center">

 <br>
 
 <!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->




  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Tuesday, January 22, 3:30pm, room ELECE 101
 </strong>
 <br>

 <em>
   Metric Spaces with Good Parameterizations
 </em> <br>
   Vyron Vellis
 <br>
  <a id="toggle_abst_january22"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_january22"> 
 This talk is concerned with the Uniformization problem: which intrinsic qualities of a metric space allow a good parameterization by a
Euclidean space? In the first part of the talk, we consider geometrically good (conformal, quasiconformal) parameterizations. While
including a wide range of fractal examples, spaces as such enjoy geometric and analytic properties and a great amount of first-order
calculus can be performed on them. In the second part of the talk, we discuss measure-theoretically good (Lipschitz, Holder)
parameterizations. The problem of classifying spaces admitting such parameterizations is is one of the most important problems
in geometric measure theory and it is associated to the famous Traveling Salesman Problem.
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_january22").click(
       function(){
          $("span#abst_january22").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 



  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Thursday, January 24, 3:30pm, room ELECE 101
 </strong>
 <br>

 <em>
   Geometric Partial Differential Equations
 </em> <br>
   Hung Tran
 <br>
  <a id="toggle_abst_january24"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_january24"> 
 Geometric PDEs are concerned with utilizing PDE techniques to study geometric problems. A general theme in my research is the investigation of equilibrium configurations with respect to natural quantities modelling the energy or entropy of geometric objects. Those equilibria enjoy several extremal properties that are usually described by elliptic PDEs. Consequently, understanding these equations would advance our knowledge about the associated geometries. In this talk, I'll describe my contribution to fundamental conjectures in the following concrete directions. First, we'll discuss PDEs on manifolds, exploiting elliptic equations that arise in special manifolds particularly in dimension four. The second direction focuses on geometric eigenvalue problems. Here the geometry of an object is examined through studying appropriate elliptic operators and their eigenvalues. Third, we'll talk about geometric flows and applications in which PDEs arise as a mechanism to change the shape of a manifold.
  </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_january24").click(
       function(){
          $("span#abst_january24").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 


  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wendesday, January 30, 4:00pm, room MATH 110
 </strong>
 <br>

 <em>
  High Order Methods on Sparse Grids for
	High-Dimensional Partial Differential Equations </em> <br>
  Wei Guo
 <br>
  <a id="toggle_abst_january30"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_january30"> 
In this talk, we present our recent development of high order numerical methods on sparse grids. We first review
the sparse grid discontinuous Galerkin (DG) scheme for transport
equations and apply it to kinetic simulations. The method uses the weak formulations
of traditional Runge-Kutta DG schemes for hyperbolic problems and is proven to be $L^2$
stable and convergent. A major advantage of the scheme lies in its low computational
and storage cost due to the employed sparse finite element approximation space. This
attractive feature is explored in simulating linear and nonlinear transport problems including the celebrated Vlasov-Poisson/Maxwell System. We then discuss our very recent development on another novel high order sparse grid method, which is as effective and
efficient as the DG counterpart for box-shaped domains, but more flexible and easier to implement on
unstructured meshes. Some preliminary results are presented to demonstrate the efficiency of our new method. 
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_january30").click(
       function(){
          $("span#abst_january30").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 

  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wendesday, February 06, 4:00pm, room MATH 110
 </strong>
 <br>

 <em>
Dynamics of Base Line Interaction for Algae-Daphnie Depending on Time Availability </em> <br>
  Akif Ibraguimov
 <br>
  <a id="toggle_abst_February06"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_February06"> 
In this talk I will present some preliminary result obtained from the modified chemotaxis model proposed by Angie Piece. I will present the primitive model of two-species interaction depending on light availability.  The Proof of existence and uniqueness  for the primitive solution will be presented.  From the obtained estimates one can conclude time stability (but not  asymptotic) of the constructed solution.
I naively hope that our approach can also highlights aspects of the evolution of the primitive live in reservoir, using PDE techniques.  Most likely I'm very wrong! Most of the observation which will be presented are obtained by collaboration and joint discussion with Angie Piece and Eugenio Aulisa.

 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_February06").click(
       function(){
          $("span#abst_February06").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 


  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wendesday, March 19, 3:30pm, room room ELECE 101
 </strong>
 <br>

 <em>
A Dynamical System for Gas Phase Cycling in Porous Media </em> <br>
  K. Alex Chang and W. Brent Lindquist 
 <br>
  <a id="toggle_abst_March19"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_March19"> 
We develop and analyze a 2x2 dynamical system describing flow through a single pore to study the dynamics of the appearance and dissolution of gas bubbles during two-component (CO2, H2O), two-phase (gas, liquid) flow. Our analysis indicates that three regimes occur at conditions pertinent to petroleum reservoirs. These regimes correspond to a critical point changing type from an unstable node to an unstable spiral and then to a stable spiral as flow rates increase. Only in the stable spiral case do gas bubbles achieve a steady-state finite size. Otherwise, all gas bubbles that form undergo, possibly oscillatory, growth and then dissolve completely. Under steady flow conditions, this formation and dissolution repeats cyclically. In this talk I will: - present the mathematical model and derive the dynamical system,
- summarize the direction fields, critical points and solution trajectories, 
- report the results of numerical solutions to the dynamical system 
- provide summary critique of the work.

 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_March19").click(
       function(){
          $("span#abst_March19").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 

 <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wendesday, April 03, 4:00pm, room MATH 110
 </strong>
 <br>

 <em>
Semi-analytic Methods for the Approximation of Abstract Fractional Extension Problems </em> <br>
  Joshua Padgett
 <br>
  <a id="toggle_abst_April03"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_April03"> 
In recent years, fractional differential equations have become quite prevalent in applied mathematics. When used correctly, these non-local operators can model non-standard transport, such as anomalous diffusion, in many applications of interest (such as porous media). Approximations of fractional operators is still a highly nontrivial process as one must preserve the non-locality of the underlying operators in order of for the method to be valid. In this talk, we will introduce the notion of fractional powers of a class of abstract operators and construct appropriate approximations of these operators via a generalization of a method employed by Caffarelli and Silvestre. These techniques make no assumption of boundedness on the operators, and thus, may be employed in numerous numerical and analytical settings. The stability and convergence of this method can easily be related back to the spectral nature of the operator of interest. Numerical experiments will be presented to further verify the presented results.
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_April03").click(
       function(){
          $("span#abst_April03").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 


<table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wendesday, April 10, 4:00pm, room MATH 110
 </strong>
 <br>

 <em>
 Primal-Dual Weak Galerkin Finite
Element Methods for Elliptic Cauchy Problems</em> <br>
  Chumei Wang
 <br>
  <a id="toggle_abst_April10"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_April10"> 
TBA
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_April10").click(
       function(){
          $("span#abst_April10").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 


  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wendesday, April 17, 4:00pm, room MATH 110
 </strong>
 <br>

 <em>
TBA </em> <br>
Yuan Liu, Mississippi State University
 <br>
  <a id="toggle_abst_April17"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_April17"> 
TBA
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_April17").click(
       function(){
          $("span#abst_April17").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 



  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wendesday, April 24, 4:00pm, room MATH 110
 </strong>
 <br>

 <em>
A Path Integration Approach to Structural Sensitivity for Dynamical Models in Biology and Astronomy </em> <br>
  Katharine Long
 <br>
  <a id="toggle_abst_April24"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_April24"> 
TBA
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_April24").click(
       function(){
          $("span#abst_April24").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 



<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>




<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->


 
 
 
  <br>  <br>  <br>

 </div>
</body>
</html>

