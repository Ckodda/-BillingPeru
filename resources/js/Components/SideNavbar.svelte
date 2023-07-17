<script>
    import {
        SideNav,
        SideNavItems,
        SideNavLink,
        SideNavMenu,
        SideNavMenuItem,
    } from "carbon-components-svelte";

    export let isSideNavOpen = false;
</script>

<SideNav bind:isOpen={isSideNavOpen}>
    <SideNavItems>
        <SideNavLink text="Link 1" />
        <SideNavLink text="Link 2" />
        <SideNavLink text="Link 3" />
        <SideNavMenu text="Menu">
            <SideNavMenuItem href="/" text="Link 1" />
            <SideNavMenuItem href="/" text="Link 2" />
            <SideNavMenuItem href="/" text="Link 3" />
        </SideNavMenu>
    </SideNavItems>
</SideNav>
