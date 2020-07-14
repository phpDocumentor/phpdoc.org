import PropTypes from "prop-types"
import React from "react"
import {Link} from "gatsby";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import * as Icons from "@fortawesome/free-brands-svg-icons"
import Logo from "../images/logo.svg";
import HeroIllustration from "../images/hero-illustration.svg";

const Header = ({siteTitle}) => (
    <>
        <header className="phpdocumentor-header phpdocumentor-section">
            <h1 className="phpdocumentor-title -without-divider">
              <Link to="/" className="phpdocumentor-title__link">
                  <img src={Logo} />
                  phpDocumentor
              </Link>
            </h1>
            <nav className="phpdocumentor-topnav">
              <ul className="phpdocumentor-topnav__menu -menu">
                <li className="phpdocumentor-topnav__menu-item"><Link to="/roadmap/"><span>Roadmap</span></Link></li>
                <li className="phpdocumentor-topnav__menu-item"><a href="//docs.phpdoc.org/3.0/"><span>Documentation</span></a></li>
                <li className="phpdocumentor-topnav__menu-item"><a href="//demo.phpdoc.org/3.0/"><span>Templates</span></a></li>
                <li className="phpdocumentor-topnav__menu-item"><Link to="/contact/"><span>Contact</span></Link></li>
                <li className="phpdocumentor-topnav__menu-item"><a href="https://twitter.com/phpdocumentor"><FontAwesomeIcon icon={Icons.faTwitter} /></a></li>
                <li className="phpdocumentor-topnav__menu-item"><a href="https://github.com/phpdocumentor/phpdocumentor"><FontAwesomeIcon icon={Icons.faGithub} /></a></li>
              </ul>
            </nav>
        </header>
        <section className="phpdocumentor-section phpdocumentor-hero">
          <section className="phpdocumentor-hero__blurb">
            <h2 className="phpdocumentor-hero__blurb-title">Because<br/><em>code</em> and <em>documentation</em><br/>are meant to be together.</h2>
            <p className="phpdocumentor-hero__blurb-slogan">
              phpDocumentor is the de-facto documentation application for PHP
              projects. Your project can benefit too from more than 20 years of experience
              and setting the standard for documenting PHP Applications.
            </p>
            <a className="phpdocumentor-button -primary" href="//docs.phpdoc.org/3.0/">Documentation</a>
          </section>

          <section className="phpdocumentor-hero__illustration">
            <img src={HeroIllustration} />
          </section>
        </section>
    </>
);

Header.propTypes = {
    siteTitle: PropTypes.string,
};

Header.defaultProps = {
    siteTitle: ``,
};

export default Header
