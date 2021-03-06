# Agitpress

Agitpress is a WIP, lightweight theme, which forks work from [Susty WP](https://sustywp.com) by Jack Lenox [https://blog.jacklenox.com], under GPL v2 or later. Built to demonstrate how small a WordPress site can be: reduced code bloat, faster load times, and reduce energy waste. Uses a browser-safe font stack and has limited dependencies. It's a tailor-fit versus a kitchen-sink theme.

# Background on Susty 🌍
The goals of the forked theme are outlined in a blog post entitled, [Delivering WordPress in 7KB](https://blog.jacklenox.com/2018/06/04/delivering-wordpress-in-7kb/).

# How Agitpress is different.
Agitpress is more general purpose for quick website creation for unions, cooperatives, and worker-led organizations. By eliminating dependencies on jQuery and other bloat-heavy front end framework, we can pare it down to the basics.

The single stylesheet, including many helpful class, is just 16 kb minified. There are no Javascript dependencies, reducing the surface area and vectors for vulnerabilties.

## The Grid
Agitpress boasts a responsive grid in two flavors: mobile and desktop. Mobile is applied by default and a single media query is used on desktop machines (which can handle the small performance hit better). .grid.grid-container

The grid is broken in span 12, meaning a cell component can span from one to twelve columns. There's no complex layout adjustment. More complex layouts are possible with gutenberg blocks. Syntax is .mobile-12, .desktop-6, etc. The suffixed number is the numerator columns spanned.

## The Events Calendar Integration
Agitpress provides some rudimentary theming for The Events Calendar by applying --agitpress-accent to select elements.

## CSS Variables
The following are declared and can be overriden from the Theme Customizer:
```css
:root {
	--agitpress-accent: rgb(217, 17, 44);
	--agitpress-gray: rgb(204,204,204);
	--agitpress-white: rgb(255,255,255);
	--agitpress-wide: 95rem;
	--agitpress-narrow: 60rem;
	--agitpress-blog: 60rem;
	--agitpress-sidebar: 30rem;
	--agitpress-muted: rgb(160,160,160);
	--agitpress-amazon-bg: rgba(35,47,62);
	--agitpress-amazon-accent: rgba(253,152,0);
	--agitpress-padding-thicc: 2rem;
	--agitpress-padding: 0.5rem 1rem;
	--agitpress-radius: 0.5em;
}
```