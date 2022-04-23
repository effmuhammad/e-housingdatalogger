"""
COMMAND untuk mulai:
cd "d:TA PA LJ/webapp_streamlit"
streamlit run app.py
"""

import streamlit as st
import pandas as pd

st.set_page_config(layout="wide")
st.write('<style>div.block-container{padding-top:2rem;}</style>', unsafe_allow_html=True)
# Use the full page instead of a narrow central column


st.markdown('Streamlit is **_really_ cool**.')
st.title('This is a titl wwwe')
st.header('This is a header')

st.sidebar.header("Tentang E-Housing")
with st.sidebar:
    st.write("""E-Housing adalah data logger berbasis Artificial Intelligence of Things (AIOT) untuk meningkatkan pengalaman 
                penggunaan dan fungsionalitas dari data logger E-Housing.""")
                