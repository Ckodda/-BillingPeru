<script>
    import {
        HeaderNav,
        HeaderNavItem,
        HeaderNavMenu,
    } from "carbon-components-svelte";
</script>

<HeaderNav>
    <HeaderNavItem href="/" text="Link 1" />
    <HeaderNavItem href="/" text="Link 2" />
    <HeaderNavItem href="/" text="Link 3" />
    <HeaderNavMenu text="Menu">
        <HeaderNavItem href="/" text="Link 1" />
        <HeaderNavItem href="/" text="Link 2" />
        <HeaderNavItem href="/" text="Link 3" />
    </HeaderNavMenu>
</HeaderNav>
