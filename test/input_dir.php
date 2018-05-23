<div class="ui">
	<nav class="navbar app">App bar</nav>
	<nav class="navbar board">Board bar</nav>
	<div class="lists">
		<div class="list">
			<header>List header</header>
			<ul>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet metus laoreet, ut condimentum</li>
			</ul>
			<footer>Add a card...</footer>
		</div>
		<div class="list">
			<header>Header</header>
			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>
					<img src="holder.js/300x150?auto=yes&bg=#ccc" alt="">
					Lorem ipsum dolor sit amet
				</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet metus laoreet, ut condimentum</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet metus laoreet, ut condimentum</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
			</ul>
			<footer>Add a card...</footer>
		</div>
		<div class="list">
			<header>Another List</header>
			<ul>
				<li>Just some text</li>
				<li>Just some text</li>
			</ul>
			<footer>Add a card...</footer>
		</div>
		<div class="list">
			<header>Header</header>
			<ul>
				<li>
					<img src="holder.js/600x400?auto=yes&bg=#ccc" alt="">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit
				</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>
					<img src="holder.js/150x150?auto=yes&bg=#ccc" alt="">
					Lorem ipsum dolor sit amet
				</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet metus laoreet, ut condimentum</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet metus laoreet, ut condimentum</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
			</ul>
			<footer>Add a card...</footer>
		</div>
		<div class="list">
			<header>Another List</header>
			<ul>
				<li>Just some text</li>
				<li>Yet another card</li>
			</ul>
			<footer>Add a card...</footer>
		</div>
		<div class="list">
			<header>Header</header>
			<ul>
				<li>
					<img src="holder.js/150x150?auto=yes&bg=#ccc" alt="">
					Lorem ipsum dolor sit amet
				</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>
					<img src="holder.js/600x400?auto=yes&bg=#ccc" alt="">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit
				</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet metus laoreet, ut condimentum</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet metus laoreet, ut condimentum</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>Lorem ipsum dolor sit amet</li>
			</ul>
			<footer>Add a card...</footer>
		</div>
		<div class="list">
			<header>Another List</header>
			<ul>
				<li>Just some text</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis enim sit amet</li>
				<li>Some more text</li>
				<li>Some more text</li>
			</ul>
			<footer>Add a card...</footer>
		</div>
	</div>
</div>




<style type="text/css">
/* Some Sass variables */
// Layout
$appbar-height: 40px;
$navbar-height: 50px;
$list-width: 300px;
$gap: 10px;
$scrollbar-thickness: 17px;
$list-header-height: 36px;
$list-footer-height: 36px;
// Misc
$list-border-radius: 5px;
$card-border-radius: 3px;
// Colors
$board-bg-color: #0079bf;
$appbar-bg-color: #0067a3;
$list-bg-color: #e2e4e6;

body {
  margin: 0;

  font-family: 'Roboto';
  font-size: 14px;
  line-height: 1.3em;
}

.ui {
  height: 100vh;

  display: grid;
  grid-template-rows: $appbar-height $navbar-height 1fr;
  //grid-template-columns: 100%;

  background-color: $board-bg-color;
  color: #eee;
}

.navbar {
  padding-left: $gap;
  display: flex;
  align-items: center;
  &.app {
    background-color: $appbar-bg-color;
    font-size: 1.5rem;
  }
  &.board {
    font-size: 1.1rem;
  }
}

.lists {
  display: flex;
  overflow-x: auto;
  //width: 100%; // This is needed for FF < 54
  > * {
    flex: 0 0 auto; // 'rigid' lists
    margin-left: $gap;
  }
  &::after {
    content: '';
    flex: 0 0 $gap;
  }
}

.list {
  width: $list-width;
  height: calc(100% - #{$gap} - #{$scrollbar-thickness});

  > * {
    background-color: $list-bg-color;
    color: #333;

    padding: 0 $gap;
  }

  header {
    line-height: $list-header-height;
    font-size: 16px;
    font-weight: bold;
    border-top-left-radius: $list-border-radius;
    border-top-right-radius: $list-border-radius;
  }

  footer {
    line-height: $list-footer-height;
    border-bottom-left-radius: $list-border-radius;
    border-bottom-right-radius: $list-border-radius;
    color: #888;
  }

  ul {
    list-style: none;
    margin: 0;

    max-height: calc(100% - #{$list-header-height} - #{$list-footer-height});
    overflow-y: auto;

    li {
      background-color: #fff;
      padding: $gap;
      &:not(:last-child) {
        margin-bottom: $gap;
      }

      border-radius: $card-border-radius;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);

      img {
        display: block;
        width: calc(100% + 2 * #{$gap});
        margin: -$gap 0 $gap (-$gap);
        border-top-left-radius: $card-border-radius;
        border-top-right-radius: $card-border-radius;
      }
    }
  }
}

</style>