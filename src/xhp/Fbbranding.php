<?hh // strict

class :fbbranding extends :x:element {
  category %flow;

  protected string $tagName = 'fbbranding';

  protected function render(): XHPRoot {
    return
      <span class="branding-el">
        <svg class="icon icon--team-indicator">
          <use href="#icon--team-indicator" />
        </svg>
        <span class="has-icon">{tr('Powered By Monash')}</span>
      </span>;
  }
}
