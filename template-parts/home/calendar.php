<section class="calendar">
    <div class="container">
        <div class="container-header">
            <p class="overline--32 color-yellow">Race calendar</p>
            <h3>Official competition schedule</h3>
        </div>
        <div class="calendar__filter-button">
            <button class="button small w-100" id="filter_button">Filter</button>
        </div>
        <div class="modal-overlay" id="modal-overlay"></div>
        <div class="calendar__filter-modal" id="filter-modal">
            <div class="calendar__filter-modal--header">
                <h6>Racing sorting</h6>
                <div id="close-filter" >
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6M18 18L6 6" stroke="#232323" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="calendar__filter-modal--container filter-reset">
                <div class="select-wrapper" style="--direction: column; --align: flex-start;">
                    <label class="body1--700" >Driver:</label>
                    <div class="select" data-type="driver" >
                        <input type="hidden" name="driver" value="driver-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="Markas">Markas</div>
                            <div class="option" data-value="saab">Vanesa</div>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper" style="--direction: column; --align: flex-start;">
                    <label class="body1--700">Year:</label>
                    <div class="select" data-type="year-type">
                        <input type="hidden" name="year" data-value="year-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="2025">2025</div>
                            <div class="option" data-value="2024">2024</div>
                            <div class="option" data-value="2023">2023</div>
                            <div class="option" data-value="2022">2022</div>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper" style="--direction: column; --align: flex-start;">
                    <label class="body1--700" >Country:</label>
                    <div class="select" data-type="country-type">
                        <input type="hidden" name="country" data-value="country-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="england">england</div>
                            <div class="option" data-value="italy">italy</div>
                            <div class="option" data-value="france">france</div>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper" style="--direction: column; --align: flex-start;">
                    <label class="body1--700">Championships:</label>
                    <div class="select" data-type="championships-type">
                        <input type="hidden" name="championships" data-value="championships-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="Championships_1">Championship 1</div>
                            <div class="option" data-value="Championships_2">Championships 2</div>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper" style="--direction: column; --align: flex-start;">
                    <label class="body1--700">Track:</label>
                    <div class="select" data-type="track-type">
                        <input type="hidden" name="track" data-value="track-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="track_1">track 1</div>
                            <div class="option" data-value="track_2">track 2</div>
                            <div class="option" data-value="track_3">track 3</div>
                        </div>
                    </div>
                </div>
                <button id="submit-filter" class="button">Display</button>
                <button data-reset class="button secondary ">RESET</button>
            </div>
        </div>

        <div class="calendar__filter-container">
            <div class="filter-container filter-reset" >
                <div class="select-wrapper">
                    <label class="body1--700" >Driver:</label>
                    <div class="select" data-type="driver" >
                        <input type="hidden" name="driver" value="driver-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="Markas">Markas</div>
                            <div class="option" data-value="saab">Vanesa</div>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper">
                    <label class="body1--700" >Year:</label>
                    <div class="select" data-type="year-type">
                        <input type="hidden" name="year" data-value="year-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="2025">2025</div>
                            <div class="option" data-value="2024">2024</div>
                            <div class="option" data-value="2023">2023</div>
                            <div class="option" data-value="2022">2022</div>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper">
                    <label class="body1--700">Country:</label>
                    <div class="select" data-type="country-type">
                        <input type="hidden" name="country" data-value="country-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="england">england</div>
                            <div class="option" data-value="italy">italy</div>
                            <div class="option" data-value="france">france</div>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper">
                    <label class="body1--700">Championships:</label>
                    <div class="select" data-type="championships-type">
                        <input type="hidden" name="championships" data-value="championships-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="Championships_1">Championship 1</div>
                            <div class="option" data-value="Championships_2">Championships 2</div>
                        </div>
                    </div>
                </div>
                <div class="select-wrapper">
                    <label class="body1--700" >Track:</label>
                    <div class="select" data-type="track-type">
                        <input type="hidden" name="track" data-value="track-value">
                        <div class="select-trigger">all</div>
                        <div class="select-options">
                            <div class="option" data-value="all">all</div>
                            <div class="option" data-value="track_1">track 1</div>
                            <div class="option" data-value="track_2">track 2</div>
                            <div class="option" data-value="track_3">track 3</div>
                        </div>
                    </div>
                </div>
                <button data-reset class="button secondary small">RESET</button>
            </div>
        </div>
        <div class="container-unfolding">
            <div class="opening-container" id="calendar" >
                <div class="calendar__card race-card ">
                    <div class="race-card__header">
                        <h6>IAME Warrior final Championship 2025</h6>
                        <p class="body1">🇮🇹 Italy</p>
                    </div>
                    <div class="race-card__content">
                        <div>
                            <p class="body1">Driver:</p>
                            <p class="subtitle1">Vanesa Silkunaite</p>
                        </div>
                        <span class="race-card__separator"></span>
                        <div>
                            <p class="body1">Track:</p>
                            <p class="subtitle1">New Castle Motorsports Park</p>
                        </div>
                        <a href="/pages/completed-track.html" class="race-card__button button secondary secondary__icon">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.4707 5.96995C13.3302 6.11058 13.2513 6.3012 13.2513 6.49995C13.2513 6.6987 13.3302 6.88933 13.4707 7.02995L18.1907 11.75H4.00066C3.80175 11.75 3.61098 11.829 3.47033 11.9696C3.32968 12.1103 3.25066 12.301 3.25066 12.5C3.25066 12.6989 3.32968 12.8896 3.47033 13.0303C3.61098 13.1709 3.80175 13.25 4.00066 13.25H18.1907L13.4707 17.9699C13.397 18.0386 13.3379 18.1214 13.2969 18.2134C13.2559 18.3054 13.2338 18.4047 13.2321 18.5054C13.2303 18.6061 13.2488 18.7062 13.2865 18.7995C13.3243 18.8929 13.3804 18.9778 13.4516 19.049C13.5228 19.1202 13.6077 19.1764 13.7011 19.2141C13.7945 19.2518 13.8945 19.2703 13.9952 19.2685C14.0959 19.2668 14.1952 19.2447 14.2872 19.2037C14.3792 19.1627 14.462 19.1036 14.5307 19.03L20.5307 13.03C20.6711 12.8893 20.75 12.6987 20.75 12.5C20.75 12.3012 20.6711 12.1106 20.5307 11.97L14.5307 5.96995C14.39 5.8295 14.1994 5.75061 14.0007 5.75061C13.8019 5.75061 13.6113 5.8295 13.4707 5.96995Z"
                                      fill="#232323"/>
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="calendar__card race-card ">
                    <div class="race-card__header">
                        <h6>IAME Warrior final Championship 2025</h6>
                        <p class="body1">🇮🇹 Italy</p>
                    </div>
                    <div class="race-card__content">
                        <div>
                            <p class="body1">Driver:</p>
                            <p class="subtitle1">Vanesa Silkunaite</p>
                        </div>
                        <span class="race-card__separator"></span>
                        <div>
                            <p class="body1">Track:</p>
                            <p class="subtitle1">New Castle Motorsports Park</p>
                        </div>
                        <a href="/pages/completed-track.html" class="race-card__button button secondary secondary__icon">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.4707 5.96995C13.3302 6.11058 13.2513 6.3012 13.2513 6.49995C13.2513 6.6987 13.3302 6.88933 13.4707 7.02995L18.1907 11.75H4.00066C3.80175 11.75 3.61098 11.829 3.47033 11.9696C3.32968 12.1103 3.25066 12.301 3.25066 12.5C3.25066 12.6989 3.32968 12.8896 3.47033 13.0303C3.61098 13.1709 3.80175 13.25 4.00066 13.25H18.1907L13.4707 17.9699C13.397 18.0386 13.3379 18.1214 13.2969 18.2134C13.2559 18.3054 13.2338 18.4047 13.2321 18.5054C13.2303 18.6061 13.2488 18.7062 13.2865 18.7995C13.3243 18.8929 13.3804 18.9778 13.4516 19.049C13.5228 19.1202 13.6077 19.1764 13.7011 19.2141C13.7945 19.2518 13.8945 19.2703 13.9952 19.2685C14.0959 19.2668 14.1952 19.2447 14.2872 19.2037C14.3792 19.1627 14.462 19.1036 14.5307 19.03L20.5307 13.03C20.6711 12.8893 20.75 12.6987 20.75 12.5C20.75 12.3012 20.6711 12.1106 20.5307 11.97L14.5307 5.96995C14.39 5.8295 14.1994 5.75061 14.0007 5.75061C13.8019 5.75061 13.6113 5.8295 13.4707 5.96995Z"
                                      fill="#232323"/>
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="calendar__card race-card ">
                    <div class="race-card__header">
                        <h6>IAME Warrior final Championship 2025</h6>
                        <p class="body1">🇮🇹 Italy</p>
                    </div>
                    <div class="race-card__content">
                        <div>
                            <p class="body1">Driver:</p>
                            <p class="subtitle1">Vanesa Silkunaite</p>
                        </div>
                        <span class="race-card__separator"></span>
                        <div>
                            <p class="body1">Track:</p>
                            <p class="subtitle1">New Castle Motorsports Park</p>
                        </div>
                        <a href="/pages/completed-track.html" class="race-card__button button secondary secondary__icon">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.4707 5.96995C13.3302 6.11058 13.2513 6.3012 13.2513 6.49995C13.2513 6.6987 13.3302 6.88933 13.4707 7.02995L18.1907 11.75H4.00066C3.80175 11.75 3.61098 11.829 3.47033 11.9696C3.32968 12.1103 3.25066 12.301 3.25066 12.5C3.25066 12.6989 3.32968 12.8896 3.47033 13.0303C3.61098 13.1709 3.80175 13.25 4.00066 13.25H18.1907L13.4707 17.9699C13.397 18.0386 13.3379 18.1214 13.2969 18.2134C13.2559 18.3054 13.2338 18.4047 13.2321 18.5054C13.2303 18.6061 13.2488 18.7062 13.2865 18.7995C13.3243 18.8929 13.3804 18.9778 13.4516 19.049C13.5228 19.1202 13.6077 19.1764 13.7011 19.2141C13.7945 19.2518 13.8945 19.2703 13.9952 19.2685C14.0959 19.2668 14.1952 19.2447 14.2872 19.2037C14.3792 19.1627 14.462 19.1036 14.5307 19.03L20.5307 13.03C20.6711 12.8893 20.75 12.6987 20.75 12.5C20.75 12.3012 20.6711 12.1106 20.5307 11.97L14.5307 5.96995C14.39 5.8295 14.1994 5.75061 14.0007 5.75061C13.8019 5.75061 13.6113 5.8295 13.4707 5.96995Z"
                                      fill="#232323"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="calendar__card race-card">
                    <div class="race-card__header">
                        <h6>IAME Warrior final Championship 2025</h6>
                        <p class="body1">🇮🇹 Italy</p>
                    </div>
                    <div class="race-card__content">
                        <div>
                            <p class="body1">Driver:</p>
                            <p class="subtitle1">Vanesa Silkunaite</p>
                        </div>
                        <span class="race-card__separator"></span>
                        <div>
                            <p class="body1">Track:</p>
                            <p class="subtitle1">New Castle Motorsports Park</p>
                        </div>
                        <a href="/pages/completed-track.html" class="race-card__button button secondary secondary__icon">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.4707 5.96995C13.3302 6.11058 13.2513 6.3012 13.2513 6.49995C13.2513 6.6987 13.3302 6.88933 13.4707 7.02995L18.1907 11.75H4.00066C3.80175 11.75 3.61098 11.829 3.47033 11.9696C3.32968 12.1103 3.25066 12.301 3.25066 12.5C3.25066 12.6989 3.32968 12.8896 3.47033 13.0303C3.61098 13.1709 3.80175 13.25 4.00066 13.25H18.1907L13.4707 17.9699C13.397 18.0386 13.3379 18.1214 13.2969 18.2134C13.2559 18.3054 13.2338 18.4047 13.2321 18.5054C13.2303 18.6061 13.2488 18.7062 13.2865 18.7995C13.3243 18.8929 13.3804 18.9778 13.4516 19.049C13.5228 19.1202 13.6077 19.1764 13.7011 19.2141C13.7945 19.2518 13.8945 19.2703 13.9952 19.2685C14.0959 19.2668 14.1952 19.2447 14.2872 19.2037C14.3792 19.1627 14.462 19.1036 14.5307 19.03L20.5307 13.03C20.6711 12.8893 20.75 12.6987 20.75 12.5C20.75 12.3012 20.6711 12.1106 20.5307 11.97L14.5307 5.96995C14.39 5.8295 14.1994 5.75061 14.0007 5.75061C13.8019 5.75061 13.6113 5.8295 13.4707 5.96995Z"
                                      fill="#232323"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="calendar__card race-card">
                    <div class="race-card__header">
                        <h6>IAME Warrior final Championship 2025</h6>
                        <p class="body1">🇮🇹 Italy</p>
                    </div>
                    <div class="race-card__content">
                        <div>
                            <p class="body1">Driver:</p>
                            <p class="subtitle1">Vanesa Silkunaite</p>
                        </div>
                        <span class="race-card__separator"></span>
                        <div>
                            <p class="body1">Track:</p>
                            <p class="subtitle1">New Castle Motorsports Park</p>
                        </div>
                        <a href="/pages/completed-track.html" class="race-card__button button secondary secondary__icon">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.4707 5.96995C13.3302 6.11058 13.2513 6.3012 13.2513 6.49995C13.2513 6.6987 13.3302 6.88933 13.4707 7.02995L18.1907 11.75H4.00066C3.80175 11.75 3.61098 11.829 3.47033 11.9696C3.32968 12.1103 3.25066 12.301 3.25066 12.5C3.25066 12.6989 3.32968 12.8896 3.47033 13.0303C3.61098 13.1709 3.80175 13.25 4.00066 13.25H18.1907L13.4707 17.9699C13.397 18.0386 13.3379 18.1214 13.2969 18.2134C13.2559 18.3054 13.2338 18.4047 13.2321 18.5054C13.2303 18.6061 13.2488 18.7062 13.2865 18.7995C13.3243 18.8929 13.3804 18.9778 13.4516 19.049C13.5228 19.1202 13.6077 19.1764 13.7011 19.2141C13.7945 19.2518 13.8945 19.2703 13.9952 19.2685C14.0959 19.2668 14.1952 19.2447 14.2872 19.2037C14.3792 19.1627 14.462 19.1036 14.5307 19.03L20.5307 13.03C20.6711 12.8893 20.75 12.6987 20.75 12.5C20.75 12.3012 20.6711 12.1106 20.5307 11.97L14.5307 5.96995C14.39 5.8295 14.1994 5.75061 14.0007 5.75061C13.8019 5.75061 13.6113 5.8295 13.4707 5.96995Z"
                                      fill="#232323"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="calendar__card race-card">
                    <div class="race-card__header">
                        <h6>IAME Warrior final Championship 2025</h6>
                        <p class="body1">🇮🇹 Italy</p>
                    </div>
                    <div class="race-card__content">
                        <div>
                            <p class="body1">Driver:</p>
                            <p class="subtitle1">Vanesa Silkunaite</p>
                        </div>
                        <span class="race-card__separator"></span>
                        <div>
                            <p class="body1">Track:</p>
                            <p class="subtitle1">New Castle Motorsports Park</p>
                        </div>
                        <a href="/pages/completed-track.html" class="race-card__button button secondary secondary__icon">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.4707 5.96995C13.3302 6.11058 13.2513 6.3012 13.2513 6.49995C13.2513 6.6987 13.3302 6.88933 13.4707 7.02995L18.1907 11.75H4.00066C3.80175 11.75 3.61098 11.829 3.47033 11.9696C3.32968 12.1103 3.25066 12.301 3.25066 12.5C3.25066 12.6989 3.32968 12.8896 3.47033 13.0303C3.61098 13.1709 3.80175 13.25 4.00066 13.25H18.1907L13.4707 17.9699C13.397 18.0386 13.3379 18.1214 13.2969 18.2134C13.2559 18.3054 13.2338 18.4047 13.2321 18.5054C13.2303 18.6061 13.2488 18.7062 13.2865 18.7995C13.3243 18.8929 13.3804 18.9778 13.4516 19.049C13.5228 19.1202 13.6077 19.1764 13.7011 19.2141C13.7945 19.2518 13.8945 19.2703 13.9952 19.2685C14.0959 19.2668 14.1952 19.2447 14.2872 19.2037C14.3792 19.1627 14.462 19.1036 14.5307 19.03L20.5307 13.03C20.6711 12.8893 20.75 12.6987 20.75 12.5C20.75 12.3012 20.6711 12.1106 20.5307 11.97L14.5307 5.96995C14.39 5.8295 14.1994 5.75061 14.0007 5.75061C13.8019 5.75061 13.6113 5.8295 13.4707 5.96995Z"
                                      fill="#232323"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="calendar__card race-card">
                    <div class="race-card__header">
                        <h6>IAME Warrior final Championship 2025</h6>
                        <p class="body1">🇮🇹 Italy</p>
                    </div>
                    <div class="race-card__content">
                        <div>
                            <p class="body1">Driver:</p>
                            <p class="subtitle1">Vanesa Silkunaite</p>
                        </div>
                        <span class="race-card__separator"></span>
                        <div>
                            <p class="body1">Track:</p>
                            <p class="subtitle1">New Castle Motorsports Park</p>
                        </div>
                        <a href="/pages/completed-track.html" class="race-card__button button secondary secondary__icon">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.4707 5.96995C13.3302 6.11058 13.2513 6.3012 13.2513 6.49995C13.2513 6.6987 13.3302 6.88933 13.4707 7.02995L18.1907 11.75H4.00066C3.80175 11.75 3.61098 11.829 3.47033 11.9696C3.32968 12.1103 3.25066 12.301 3.25066 12.5C3.25066 12.6989 3.32968 12.8896 3.47033 13.0303C3.61098 13.1709 3.80175 13.25 4.00066 13.25H18.1907L13.4707 17.9699C13.397 18.0386 13.3379 18.1214 13.2969 18.2134C13.2559 18.3054 13.2338 18.4047 13.2321 18.5054C13.2303 18.6061 13.2488 18.7062 13.2865 18.7995C13.3243 18.8929 13.3804 18.9778 13.4516 19.049C13.5228 19.1202 13.6077 19.1764 13.7011 19.2141C13.7945 19.2518 13.8945 19.2703 13.9952 19.2685C14.0959 19.2668 14.1952 19.2447 14.2872 19.2037C14.3792 19.1627 14.462 19.1036 14.5307 19.03L20.5307 13.03C20.6711 12.8893 20.75 12.6987 20.75 12.5C20.75 12.3012 20.6711 12.1106 20.5307 11.97L14.5307 5.96995C14.39 5.8295 14.1994 5.75061 14.0007 5.75061C13.8019 5.75061 13.6113 5.8295 13.4707 5.96995Z"
                                      fill="#232323"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <button id="view-calendar" class="button secondary">View all cups</button>
            </div>
        </div>
    </div>
</section>