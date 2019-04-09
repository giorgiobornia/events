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

 <?php $mysem = "Fall 2018"; ?>
 <?php $myroom = "MATH 112"; ?>
 <?php $mytime = "Wednesday, 4-5 pm"; ?>
 <?php include($sem_mydepth . "sem_coords.php");  ?>
<!-- Maybe I should make a database for the seminar coords -->
 
 
 <div class="container text-center">

 <br>
 
 <!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->

<!-- POTENTIAL SPEAKERS =========================== -->
<!-- Josh -->
<!-- Zari -->





  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/wang_square.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wednesday, September 5
 </strong>
 <br>

 <em>
   Primal-Dual Weak Galerkin Finite Element Methods for PDEs
 </em> <br>
   Chunmei Wang
 <br>
  <a style="cursor:pointer;" id="toggle_abst_september5"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_september5"> 
   Weak Galerkin (WG) finite element method is a numerical technique for PDEs where the differential operators in the variational form are reconstructed/approximated by using a framework that mimics the theory of distributions for piecewise polynomials. The usual regularity of the approximating functions is compensated by carefully-designed stabilizers. The fundamental difference between WG methods and other existing finite element methods is the use of weak derivatives and weak continuities in the design of numerical schemes based on conventional weak forms for the underlying PDE problems. Due to its great structural flexibility, WG methods are well suited to a wide class of PDEs by providing the needed stability and accuracy in approximations. The speaker will present a recent development of WG, called "Primal-Dual Weak Galerkin (PD-WG)", for problems for which the usual numerical methods are difficult to apply. The essential idea of PD-WG is to interpret the numerical solutions as a constrained minimization of some functionals with constraints that mimic the weak formulation of the PDEs by using weak derivatives. The resulting Euler-Lagrange equation offers a symmetric scheme involving both the primal variable and the dual variable (Lagrange multiplier). PD-WG method is applicable to several challenging problems for which existing methods may have difficulty in applying; these problems include the second order elliptic equations in nondivergence form, Fokker-Planck equation, and elliptic Cauchy problems. An abstract framework for PD-WG will be presented and discussed for its potential in other scientific applications.
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_september5").click(
       function(){
          $("span#abst_september5").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 




  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/giorgio_bornia.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Thursday, September 13
 </strong>
 <br>

 <em>
   Numerical Aspects of Coupled Problems in Fluid Dynamics
 </em> <br>
   Giorgio Bornia
 <br>
  <a  style="cursor:pointer;"  id="toggle_abst_september13"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_september13"> 
   Problems involving fluids are ubiquitous in science and engineering.
 Their understanding is of great importance for the prediction 
 of the behaviour of many real-life phenomena.
 Their mathematical description is among the most challenging efforts of the scientific community.
  In this talk I will discuss some problems involving fluid dynamics
 that have been the subject of my research in the last years:
 Rayleigh-Bénard convection, 
 Fluid-Structure Interaction,
 hydraulic fracturing 
 and optimal control of fluid dynamics equations.
 Attention will be paid to both computational and theoretical aspects,
 such as preconditioning of linearized algebraic systems and convergence conditions.
 This work is the result of several collaborations 
 with colleagues at TTU and other institutions, 
 along with financial support from the National Science Foundation.
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_september13").click(
       function(){
          $("span#abst_september13").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 






 <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/lauria.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wednesday, September 19
 </strong>
 <br>

 <em>
   Multistage Stochastic Programming for
Mortality Swap Pricing
 </em> <br>
   Davide Lauria
 <br>
  <a style="cursor:pointer;" id="toggle_abst_september19"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_september19"> 
 Longevity represents an increasingly important risk for defined benefit
(DB) pension plans and annuity providers, because life expectancy is dramatically
increasing in developed countries. In particular, the sponsors of
DB pension plans are exposed to the risk that unexpected improvements in
the survival rates of pensioners will increase the cost of pension provisions.
Longevity swaps are hedging instruments whereby two parties, typically
a re-insurer or investment bank on one side, and a pension fund or annuity
provider on the other side, agree to exchange fixed payments against
variable payments, as in other swaps. The hedge provider is typically the
investment bank or re-insurer, that pays variable payments based on the
scheme’s actual mortality rates, or on a reference mortality index, and receives
fixed payments based on agreed mortality assumptions, whereas the
hedge buyer is the pension fund or annuity provider, that pays fixed and
receives variable payments. We propose a multistage stochastic programming
(MSP) approach to price longevity swap derivatives, i.e. find the
contract fixed rate, on a risk measure based replication framework. In the
proposed methodology the current pension fund liability market value is
firstly estimated: given an asset universe of tradable and liquid securities
and an investment horizon with discrete rebalancing portfolio periods, we
look for the least expensive trading strategy to replicate the pension fund
future obligations. The present cost of such portfolio, under self-financing
conditions, will provide the current liability value. The pay-off structure
of the longevity swap is then inserted in the MSP model, where the contract
variable rates will be given by a discrete stochastic mortality model,
and the fixed rate of the contract will be set as a variable. In this case we
seek for the least expensive trading strategy, and the least fixed contract
rate, which ensure the minimal improvement in the current liability value.
This fixed rate will be the price of the longevity swap. This procedure
has been used to price different aged-related longevity swaps.
  </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_september19").click(
       function(){
          $("span#abst_september19").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 



  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/hoang.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Thursday, September 27
 </strong>
 <br>

 <em>
  TBA
</em> <br>
  Luan Hoang
 <br>
  <a style="cursor:pointer;" id="toggle_abst_september27"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_september27"> 
  TBA
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_september27").click(
       function(){
          $("span#abst_september27").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 




  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/long.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wednesday, October 3
 </strong>
 <br>

 <em>
  Advanced scientific programming techniques illustrated with a code for simulating compressible fluid dynamics in galaxies (part I)
</em> <br>
  Kevin Long
 <br>
  <a style="cursor:pointer;" id="toggle_abst_october3"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_october3"> 
  Professional scientific programmers strive to develop programs that are very efficient yet also robust, maintainable, easy to use, and easily applied to new problems and adapted to new algorithms. There are a number of general programming techniques that can help attain a combination of efficiency, safety, simplicity, and extensibility. Unfortunately, while techniques such as templating, inheritance, type traits, smart pointers, factory objects, and callback objects aren't difficult conceptually and are well-known among professional programmers, their uses aren't particularly obvious to beginning programmers. 
 In this series of talks I will describe how such methods were used to solve a number of programming challenges that arose during the development of a C++ program to simulate a class of problems in galaxy dynamics. The code was built using existing software libraries for solution of partial differential equations; even so, the efficient and extensible use of those libraries required a surprisingly wide selection of "evil programming tricks." Most of these techniques are not specific to C++, and can be used in other languages such as Python. 
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_october3").click(
       function(){
          $("span#abst_october3").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 



  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/sun.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Thursday, October 4, 3:30pm
 </strong>
 <br>

 <em>
   On High-Dimensional Covariance Matrix Estimation and Hypothesis Testing (SIAM Colloquium)
</em> <br>
  Xiaoqian Sun
 <br>
  <a style="cursor:pointer;" id="toggle_abst_october4"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_october4"> 
  Statistical inference on the covariance matrix has a variety of applications in many different
areas, such as gene expression analysis, remote sensing and financial portfolio analysis. As an
estimate of the population covariance matrix, the sample covariance matrix performs quite well
in the classical setting. However, it becomes ill-conditioned or even singular and thus behaves
poorly in high-dimensional setting. Stein-type shrinkage approach is commonly used to tackle
this difficult problem when the dimensionality is large. A convex combination of the sample
covariance matrix and a well-conditioned target matrix is considered to estimate the
covariance matrix. Recent work in the literature has shown that an optimal combinationexists
undermean-squaredloss,however itmustbe estimatedfromthe data. In this talk, we introduce
a new set of estimators for the optimal convex combination for three commonly used target
matrices. A simulation study shows an improvement over those in the literature in cases of
extreme high-dimensionality of the data. Interestingly, the results can also be applied to some
testing problems on the high-dimensional covariance matrix.
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_october4").click(
       function(){
          $("span#abst_october4").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 



  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/long.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wednesday, October 10
 </strong>
 <br>

 <em>
  Advanced scientific programming techniques illustrated with a code for simulating compressible fluid dynamics in galaxies (part II)
</em> <br>
  Kevin Long
 <br>
  <a style="cursor:pointer;" id="toggle_abst_october10"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_october10"> 
  Professional scientific programmers strive to develop programs that are very efficient yet also robust, maintainable, easy to use, and easily applied to new problems and adapted to new algorithms. There are a number of general programming techniques that can help attain a combination of efficiency, safety, simplicity, and extensibility. Unfortunately, while techniques such as templating, inheritance, type traits, smart pointers, factory objects, and callback objects aren't difficult conceptually and are well-known among professional programmers, their uses aren't particularly obvious to beginning programmers. 
 In this series of talks I will describe how such methods were used to solve a number of programming challenges that arose during the development of a C++ program to simulate a class of problems in galaxy dynamics. The code was built using existing software libraries for solution of partial differential equations; even so, the efficient and extensible use of those libraries required a surprisingly wide selection of "evil programming tricks." Most of these techniques are not specific to C++, and can be used in other languages such as Python. 
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_october10").click(
       function(){
          $("span#abst_october10").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 





  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Tuesday, October 16 - Thursday, October 18
 </strong>
 <br>

 <em>
   Dayawansa Memorial Lecture Series
</em> <br>
  TBA
 <br>
  <a style="cursor:pointer;" id="toggle_abst_october17"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_october17"> 
  TBA
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_october17").click(
       function(){
          $("span#abst_october17").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 




  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Saturday, October 27
 </strong>
 <br>

 <em>
   <a href="https://www.depts.ttu.edu/math/department/calendar/conferences/redraider/rrms2018.php"> Current Trends in Numerical Analysis and Scientific Computing - XVII Red Raider Minisymposium  </a>
</em> <br>
  
 <br>
<!--   <a style="cursor:pointer;" id="toggle_abst_october27"> abstract </a>  -->
  </td>
</tr>
 </table> 

 
<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->
<br>



  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/rahman.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wednesday, October 31
 </strong>
 <br>

 <em>
 Discrete Dynamical Models of Walking Droplets
</em> <br>
   Amin Rahman
 <br>
  <a style="cursor:pointer;" id="toggle_abst_october31"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_october31"> 
  Recent experiments on walking droplets show the existence of complex dynamics including new global bifurcations and chaotic motion.  I present models from walkers in a confined rectilinear geometry and on an annulus.  The models are shown to achieve both qualitative and quantitative agreement with the experiments of a single walker, and makes predictions about heretofore unobserved behavior of multiple droplets.  Using dynamical systems techniques and bifurcation theory, the single droplet models are analyzed to prove dynamics suggested by the numerical simulations.
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_october31").click(
       function(){
          $("span#abst_october31").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 



<!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->



  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/volchenkov.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wednesday, November 7
 </strong>
 <br>

 <em>
    À la recherche du temps perdu: A look at Stochastic Nonlinear Dynamics through a prism of Quantum Field Theory
</em> <br>
   Dimitri Volchenkov
 <br>
  <a style="cursor:pointer;" id="toggle_abst_november7"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_november7"> 
 Stochastic counterparts of nonlinear dynamics problems might be studied by 
non-perturbative functional methods developed in the framework of quantum
field theory. Keywords: Kolmogorov’ 1941 (Navier-Stokes turbulence), transport through
porous media, waterspouts, tsunami waves, stochastic magnetohydrodynamics, self-organized criticality, etc.
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_november7").click(
       function(){
          $("span#abst_november7").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 


 
  <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/DoubleT.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wednesday, November 14
 </strong>
 <br>

 <em>
    No seminar this week
</em> <br>
   
 <br>
<!--   <a style="cursor:pointer;" id="toggle_abst_november14"> abstract </a>  -->
  </td>
</tr>
 </table> 

 
<!-- <span class="abst" id="abst_november14"> 
 TBA
 </span>-->

 
<!-- <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_november14").click(
       function(){
          $("span#abst_november14").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> -->
 

 
   <table class="sem_item">
<tr>
<td> <img class="sem_image img-circle"  src="images/rahman.jpg" alt="image">  </td>
 <td> 
 <strong> 
   Wednesday, November 28
 </strong>
 <br>

 <em>
    Simple transport-population models for drug distribution and tumor cell death.
</em> <br>
   Amin Rahman
 <br>
  <a style="cursor:pointer;" id="toggle_abst_november28"> abstract </a> 
  </td>
</tr>
 </table> 

 
 <span class="abst" id="abst_november28"> 
 It has been shown recently that changing the fluidic properties of a drug can improve its efficacy in ablating solid tumors.  We develop a modeling framework for tumor ablation, and present the simplest possible model for drug diffusion in a porous spherical tumor with leaky boundaries and assuming cell death eventually leads to ablation of that cell effectively making the two quantities numerically equivalent.  The death of a cell after a given exposure time depends on both the concentration of the drug and the amount of oxygen available to the cell, which we assume is the same throughout the tumor for further simplicity.  It can be assumed that a minimum concentration is required for a cell to die, effectively connecting diffusion with efficacy.  The concentration threshold decreases as exposure time increases, which allows us to compute dose-response curves.  Furthermore, these curves can be plotted at much finer time intervals compared to that of experiments, which may possibly be used to produce a dose-threshold-response surface giving an observer a complete picture of the drug's efficacy for an individual.  In addition, since the diffusion, leak coefficients, and the availability of oxygen is different for different individuals and tumors, we produce artificial replication data through bootstrapping to simulate error. While the usual data-driven model with Sigmoidal curves use 12 free parameters, our mechanistic model only has two free parameters, allowing it to be open to scrutiny rather than forcing agreement with data.  Even so, the simplest model in our framework, derived here, shows close agreement with the bootstrapped curves, and reproduces well established relations, such as Haber's rule.
 </span>

 
 <script>
 $(document).ready(  //jQuery function
  function(){
    $("a#toggle_abst_november28").click(
       function(){
          $("span#abst_november28").toggle();
        }
      );  //end click
    }
  );  //end ready
</script> 

 
 
  <br>  <br>  <br>

 </div>
</body>
</html>

