<script>
    import {
      Header,
      HeaderNav,
      HeaderNavItem,
      HeaderNavMenu,
      SideNav,
      SideNavItems,
      SideNavMenu,
      SideNavMenuItem,
      SideNavLink,
      SkipToContent,
      Content,
      Grid,
      Row,
      Column,
    } from "carbon-components-svelte";
    import NavItems from "../Components/NavItems.svelte";
    import SideNavbar from "../Components/SideNavbar.svelte";
    
    let isSideNavOpen = false;
  </script>
  
  <Header
    persistentHamburgerMenu={true}
    company="KOUDDA"
    platformName="Billing Peru"
    bind:isSideNavOpen
  >
    <svelte:fragment slot="skip-to-content">
      <SkipToContent />
    </svelte:fragment>
    <NavItems/>
  </Header>
  
  <SideNavbar {isSideNavOpen}/>