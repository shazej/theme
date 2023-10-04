import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CreditNotesDraftComponent } from './credit-notes-draft.component';

describe('CreditNotesDraftComponent', () => {
  let component: CreditNotesDraftComponent;
  let fixture: ComponentFixture<CreditNotesDraftComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CreditNotesDraftComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CreditNotesDraftComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
