"""
COMMAND untuk mulai:
cd "d:TA PA LJ/webapp_streamlit"
streamlit run app.py
"""

import streamlit as st
import pandas as pd

st.set_page_config(page_title="E-Housing",
                   page_icon="⚡",
                   layout="wide")
st.write('<style>div.block-container{padding-top:2rem;}</style>', unsafe_allow_html=True)
# Use the full page instead of a narrow central column


# st.markdown('Streamlit is **_really_ cool**.')
st.title('E-Housing dalam Maintenance')
st.header('Buka kembali beberapa saat kemudian')

st.sidebar.header("Tentang E-Housing")
with st.sidebar:
    st.write("""E-Housing adalah data logger berbasis Artificial Intelligence of Things (AIOT) untuk meningkatkan pengalaman 
                penggunaan dan fungsionalitas dari data logger E-Housing.""")
                