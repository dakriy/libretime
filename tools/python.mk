.ONESHELL:

SHELL := bash
CPU_CORES := $(shell nproc)

# PIP_INSTALL := --editable .[dev]
# PYLINT_ARG :=
# MYPY_ARG :=
# PYTEST_ARG :=

VENV := venv
$(VENV):
	python3 -m venv $(VENV)
	source $(VENV)/bin/activate
	pip install --upgrade pip setuptools wheel
	pip install $(PIP_INSTALL)

.PHONY: .pylint
.pylint: $(VENV)
	source $(VENV)/bin/activate
	pylint --output-format=colorized $(PYLINT_ARG) || true

.PHONY: .mypy
.mypy: $(VENV)
	source $(VENV)/bin/activate
	mypy $(MYPY_ARG) || true

.PHONY: .pytest
.pytest: $(VENV)
	source venv/bin/activate
	pytest -n $(CPU_CORES) --color=yes -v $(PYTEST_ARG)

.PHONY: .clean
.clean:
	rm -Rf $(VENV)