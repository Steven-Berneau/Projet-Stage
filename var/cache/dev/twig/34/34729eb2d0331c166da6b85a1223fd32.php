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
class __TwigTemplate_4923c0a3f5f10c11eef6555f91e7ef4c extends Template
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

<h1 id=\"TitreAccueil\" class=\"col d-flex align-items-center justify-content-center\">ShopTattoo</h1>


<div class=\"card mb-3\" style=\"max-width: 1000px;\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img id=\"Flora\" class=\"img-fluid rounded-start\" alt=\"Flora\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title link-light fst-italic\">Mon histoire</h5>
        <p class=\"card-text fst-italic\">Depuis toujours, le dessin rythme ma vie. Ayant exploré de nombreuses techniques, allant du crayon de couleur à la peinture, j’ai naturellement suivi une voie artistique. Toutefois, les méthodes enseignées au lycée André Malraux ne me convenant pas, je me suis orienté vers une formation en PAO Infographie. Malgré ma maîtrise des outils tels que Photoshop et Illustrator, des circonstances personnelles m’ont poussée à m’éloigner de mes ambitions initiales.

Avec le temps, soutenu par ma femme, mon désir de m’épanouir artistiquement s’est renforcé. Le tatouage, fusion de recherche artistique et technicité, m’a passionnée. Suite à de nombreux essais sur peau synthétique et une formation professionnelle approfondie couvrant les techniques du tatouage et les règles d’hygiène, j’ai finalement lancée mon salon à Bourges, spécialisé notamment en styles ornemental, graphique, aquarelle et réalisme.

</p>
        <p class=\"card-text \"><medium class=\"link-light fst-italic fw-bold\">Flora.</medium></p>
      </div>
    </div>
  </div>
</div>


<div class=\"card mb-3\" style=\"max-width: 1000px;\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img id=\"Salon\" class=\"img-fluid rounded-start\" alt=\"...\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title link-light fst-italic\">Accueil du Shop</h5>

<p class=\"fst-italic\">Bienvenue chez Shop'Tattoo, Flora tatoueuse du département du Cher (18). Spécialisé en tatouage Dotwork, réaliste et aquarelle, Flora vous offre des designs uniques et professionnels pour satisfaire toutes vos envies artistiques.

Après des études en arts graphiques suivies d’une formation en PAO de niveau 3, Flora a transformée sa passion en métier en ouvrant son propre salon de tatouage à Bourges. La maîtrise d’une technique complexe, couplée à une spécialisation en styles ornementaux, nous place au sommet de l’art du tatouage.</p>
<a class=\"card-text\"><small class=\"link-light fst-italic fw-bold\" href=";
        // line 94
        yield "https://www.instagram.com/seaderrant/?hl=fr";
        yield ">Instagram</small></a>
        
      </div>
    </div>
  </div>
</div>

<div class=\"card mb-3\" style=\"max-width: 1000px;\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img id=\"Salon2\" class=\"img-fluid rounded-start\" alt=\"...\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title link-light fst-italic\">L'HYGIÈNE AU CENTRE DE NOS PRÉOCCUPATIONS</h5>
        <p class=\"card-text fst-italic\">
La formation en hygiène est un aspect fondamental pour quiconque souhaite se lancer dans le métier. L’utilisation d’aiguilles à usage unique, la gestion adéquate des pigments et encres, et une connaissance approfondie du processus de cicatrisation sont essentielles pour garantir la sécurité et la satisfaction des clients.

Chez Shop'Tattoo, chaque tatouée bénéficie d’une expérience sur mesure. Si le réalisme est votre style de prédilection, attendez vous à être ébloui. La profondeur du noir et gris, l’éclat des couleurs et la précision des lignes sont à la hauteur des attentes les plus élevées.</p>
<a class=\"card-text\"><small class=\"link-light fst-italic\">Matériel utilisé à la vue du client.</small></a>
      </div>
    </div>
  </div>
</div>

<div class=\"card mb-3\" style=\"max-width: 1000px;\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img id=\"Salon1\" class=\"img-fluid rounded-start\" alt=\"...\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title link-light fst-italic\">Mes engagements</h5>
        <ul class=\"card-text fst-italic\">  
          <li>Être à votre écoute et réaliser un tatouage conforme à vos attentes.</li>
          <li>Vous apportez une réalisation graphique unique et personnalisée.</li>
          <li>Vous informer précisément des risques et contraintes liés au tattoo : une fiche de soins détaillée et personnalisée vous sera remise.</li>
          <li>Vous tatouer dans des conditions d’hygiène optimum : matériel stérile et/ou à usage unique, espace décontaminé entre chaque client, encres conformes à la réglementation…</li>
          <li>Vous proposer mon expérience, talentueuse, sympathiques et respectueuse de votre personne.</li>
          <li>Vous informer précisément des soins à apporter à votre tattoo pendant la cicatrisation.</li>
          <li>Vous accueillir dans des locaux propres, agréables et climatisés.</li>
          <li>ATTENTION : la bonne cicatrisation de votre tatouage est de votre responsabilité, il faut en prendre soin et suivre scrupuleusement les consignes !</li>

          <li>Shop'Tattoo est en conformité avec le décret du 19 février 2008 concernant la règlementation sur les pratiques de tatouage corporel (pour en savoir plus, voir la rubrique Hygiène et soins).</li>

        </ul>
        <p class=\"card-text\"><small class=\"link-light fst-italic fw-bold\"><li>Je ne réalise aucun tatouage sur les mineurs.</small></p>
      </div>
    </div>
  </div>
</div>

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
        return array (  216 => 94,  177 => 57,  171 => 54,  168 => 53,  165 => 52,  159 => 49,  156 => 48,  150 => 45,  140 => 37,  135 => 32,  128 => 28,  122 => 25,  116 => 22,  110 => 19,  100 => 12,  94 => 8,  91 => 7,  81 => 6,  60 => 3,  37 => 1,);
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

<h1 id=\"TitreAccueil\" class=\"col d-flex align-items-center justify-content-center\">ShopTattoo</h1>


<div class=\"card mb-3\" style=\"max-width: 1000px;\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img id=\"Flora\" class=\"img-fluid rounded-start\" alt=\"Flora\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title link-light fst-italic\">Mon histoire</h5>
        <p class=\"card-text fst-italic\">Depuis toujours, le dessin rythme ma vie. Ayant exploré de nombreuses techniques, allant du crayon de couleur à la peinture, j’ai naturellement suivi une voie artistique. Toutefois, les méthodes enseignées au lycée André Malraux ne me convenant pas, je me suis orienté vers une formation en PAO Infographie. Malgré ma maîtrise des outils tels que Photoshop et Illustrator, des circonstances personnelles m’ont poussée à m’éloigner de mes ambitions initiales.

Avec le temps, soutenu par ma femme, mon désir de m’épanouir artistiquement s’est renforcé. Le tatouage, fusion de recherche artistique et technicité, m’a passionnée. Suite à de nombreux essais sur peau synthétique et une formation professionnelle approfondie couvrant les techniques du tatouage et les règles d’hygiène, j’ai finalement lancée mon salon à Bourges, spécialisé notamment en styles ornemental, graphique, aquarelle et réalisme.

</p>
        <p class=\"card-text \"><medium class=\"link-light fst-italic fw-bold\">Flora.</medium></p>
      </div>
    </div>
  </div>
</div>


<div class=\"card mb-3\" style=\"max-width: 1000px;\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img id=\"Salon\" class=\"img-fluid rounded-start\" alt=\"...\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title link-light fst-italic\">Accueil du Shop</h5>

<p class=\"fst-italic\">Bienvenue chez Shop'Tattoo, Flora tatoueuse du département du Cher (18). Spécialisé en tatouage Dotwork, réaliste et aquarelle, Flora vous offre des designs uniques et professionnels pour satisfaire toutes vos envies artistiques.

Après des études en arts graphiques suivies d’une formation en PAO de niveau 3, Flora a transformée sa passion en métier en ouvrant son propre salon de tatouage à Bourges. La maîtrise d’une technique complexe, couplée à une spécialisation en styles ornementaux, nous place au sommet de l’art du tatouage.</p>
<a class=\"card-text\"><small class=\"link-light fst-italic fw-bold\" href={{\"https://www.instagram.com/seaderrant/?hl=fr\"}}>Instagram</small></a>
        
      </div>
    </div>
  </div>
</div>

<div class=\"card mb-3\" style=\"max-width: 1000px;\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img id=\"Salon2\" class=\"img-fluid rounded-start\" alt=\"...\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title link-light fst-italic\">L'HYGIÈNE AU CENTRE DE NOS PRÉOCCUPATIONS</h5>
        <p class=\"card-text fst-italic\">
La formation en hygiène est un aspect fondamental pour quiconque souhaite se lancer dans le métier. L’utilisation d’aiguilles à usage unique, la gestion adéquate des pigments et encres, et une connaissance approfondie du processus de cicatrisation sont essentielles pour garantir la sécurité et la satisfaction des clients.

Chez Shop'Tattoo, chaque tatouée bénéficie d’une expérience sur mesure. Si le réalisme est votre style de prédilection, attendez vous à être ébloui. La profondeur du noir et gris, l’éclat des couleurs et la précision des lignes sont à la hauteur des attentes les plus élevées.</p>
<a class=\"card-text\"><small class=\"link-light fst-italic\">Matériel utilisé à la vue du client.</small></a>
      </div>
    </div>
  </div>
</div>

<div class=\"card mb-3\" style=\"max-width: 1000px;\">
  <div class=\"row g-0\">
    <div class=\"col-md-4\">
      <img id=\"Salon1\" class=\"img-fluid rounded-start\" alt=\"...\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title link-light fst-italic\">Mes engagements</h5>
        <ul class=\"card-text fst-italic\">  
          <li>Être à votre écoute et réaliser un tatouage conforme à vos attentes.</li>
          <li>Vous apportez une réalisation graphique unique et personnalisée.</li>
          <li>Vous informer précisément des risques et contraintes liés au tattoo : une fiche de soins détaillée et personnalisée vous sera remise.</li>
          <li>Vous tatouer dans des conditions d’hygiène optimum : matériel stérile et/ou à usage unique, espace décontaminé entre chaque client, encres conformes à la réglementation…</li>
          <li>Vous proposer mon expérience, talentueuse, sympathiques et respectueuse de votre personne.</li>
          <li>Vous informer précisément des soins à apporter à votre tattoo pendant la cicatrisation.</li>
          <li>Vous accueillir dans des locaux propres, agréables et climatisés.</li>
          <li>ATTENTION : la bonne cicatrisation de votre tatouage est de votre responsabilité, il faut en prendre soin et suivre scrupuleusement les consignes !</li>

          <li>Shop'Tattoo est en conformité avec le décret du 19 février 2008 concernant la règlementation sur les pratiques de tatouage corporel (pour en savoir plus, voir la rubrique Hygiène et soins).</li>

        </ul>
        <p class=\"card-text\"><small class=\"link-light fst-italic fw-bold\"><li>Je ne réalise aucun tatouage sur les mineurs.</small></p>
      </div>
    </div>
  </div>
</div>

{% endblock %}", "home/index.html.twig", "/var/www/Projet-Stage/templates/home/index.html.twig");
    }
}
