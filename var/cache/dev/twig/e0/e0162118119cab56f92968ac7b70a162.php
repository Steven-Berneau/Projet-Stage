<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_068e0d63d43cfed3ca50f64c8e9fc564 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "ShopTattoo - Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    \t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            yield "
\t\t<nav class=\"navbar navbar-expand-lg bg-light\">
  <div class=\"container-fluid\">
  <img id=\"logo\">
    <a class=\"navbar-brand link-primary fw-bold\" href=\"";
            // line 12
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse link-primary \" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_render_salon");
            yield "\">Salon</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_render_portfolio");
            yield "\">Portfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_render_soin");
            yield "\">Soins & Hygiène</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_render_event");
            yield "\">Evènements</a>
        </li>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_render_contact");
            yield "\">Contact</a>
        </li>
        ";
            // line 37
            yield "      </ul>
      <form class=\"d-flex\" role=\"search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher\" aria-label=\"Search\">
        <button class=\"link-primary btn btn-outline-primary\" type=\"submit\">Rechercher</button>
      </form>
    </div>
  </div>
  <div class=\"col d-flex align-items-center justify-content-center\">
\t\t<a class=\"link-primary btn btn-primary bg-light\" href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
\t\t</div>
\t\t";
        } else {
            // line 48
            yield "\t\t<div class=\"col d-flex align-items-center justify-content-center\">
\t\t<a class=\"link-secondary btn btn-primary bg-light\" href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
\t\t</div>
\t\t";
        }
        // line 52
        yield "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 53
            yield "    <div class=\"d-grid gap-2 d-md-flex justify-content\">
        <a class=\"link-primary fw-bold btn bg-light\" href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\"><img id=\"Admin\"></a>
    </div>
";
        }
        // line 57
        yield "</nav>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  177 => 57,  171 => 54,  168 => 53,  165 => 52,  159 => 49,  156 => 48,  150 => 45,  140 => 37,  135 => 32,  128 => 28,  122 => 25,  116 => 22,  110 => 19,  100 => 12,  94 => 8,  91 => 7,  81 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ShopTattoo - Accueil
{% endblock %}

{% block body %}
    \t{% if is_granted('IS_AUTHENTICATED_FULLY') %}

\t\t<nav class=\"navbar navbar-expand-lg bg-light\">
  <div class=\"container-fluid\">
  <img id=\"logo\">
    <a class=\"navbar-brand link-primary fw-bold\" href=\"{{path('app_home')}}\">Accueil</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse link-primary \" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"{{path('app_render_salon')}}\">Salon</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"{{path('app_render_portfolio')}}\">Portfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"{{path('app_render_soin')}}\">Soins & Hygiène</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"{{path('app_render_event')}}\">Evènements</a>
        </li>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active link-primary fst-italic\" aria-current=\"page\" href=\"{{path('app_render_contact')}}\">Contact</a>
        </li>
        {# <li class=\"nav-item\">
          <a class=\"nav-link disabled\" aria-disabled=\"true\">Disabled</a>
        </li> #}
      </ul>
      <form class=\"d-flex\" role=\"search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Rechercher\" aria-label=\"Search\">
        <button class=\"link-primary btn btn-outline-primary\" type=\"submit\">Rechercher</button>
      </form>
    </div>
  </div>
  <div class=\"col d-flex align-items-center justify-content-center\">
\t\t<a class=\"link-primary btn btn-primary bg-light\" href=\"{{path('app_logout')}}\">Déconnexion</a>
\t\t</div>
\t\t{% else %}
\t\t<div class=\"col d-flex align-items-center justify-content-center\">
\t\t<a class=\"link-secondary btn btn-primary bg-light\" href=\"{{path('app_login')}}\">Connexion</a>
\t\t</div>
\t\t{% endif %}
    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"d-grid gap-2 d-md-flex justify-content\">
        <a class=\"link-primary fw-bold btn bg-light\" href=\"{{ path('app_admin') }}\"><img id=\"Admin\"></a>
    </div>
{% endif %}
</nav>



{% endblock %}", "home/index.html.twig", "/home/steven/Projet-Stage/templates/home/index.html.twig");
    }
}
